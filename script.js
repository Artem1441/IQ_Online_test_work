let sumDeposit = document.querySelector(".calc_inputs_block_input_sumDeposit");
let sumReplenishment = document.querySelector(".calc_inputs_block_input_sumReplenishment");
let sumDeposit_input = document.querySelector(".sumDeposit_input");
let sumReplenishment_input = document.querySelector(".sumReplenishment_input");
let calc_btn = document.querySelector('.calc_btn');

sumDeposit.oninput = function () {
    sumDeposit.value = sumDeposit.value.replace(/\s/g, '').replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 ');
    $(".calc_inputs_block_input_sumDeposit").val(sumDeposit.value);
};
sumReplenishment.oninput = function () {
    sumReplenishment.value = sumReplenishment.value.replace(/\s/g, '').replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 ');
    $(".calc_inputs_block_input_sumReplenishment").val(sumReplenishment.value);
};
sumDeposit_input.oninput = function () {
    $(".calc_inputs_block_input_sumDeposit").val(sumDeposit_input.value.replace(/\s/g, '').replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 '));
};
sumReplenishment_input.oninput = function () {
    $(".calc_inputs_block_input_sumReplenishment").val(sumReplenishment_input.value.replace(/\s/g, '').replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 '));
};

$(".menu_btn").on("click", function () {
    $(".menu_list").slideToggle();
    // $(".header_content").css("display", "flex");
});

calc_btn.onclick = function () {
    if ($('.calc_inputs_block_input_sumDeposit').val() == '' || $('.calc_inputs_block_input_time').val() == '' || $('input[name="replenishment"]:checked').val() == '' || $('.calc_inputs_block_input_sumReplenishment').val() == '' || $('.calc_inputs_block_input_date').val() == '') {
        alert('Не все поля введены!')
    }
    else {
        $.ajax({
            type: "POST",
            url: "calc.php",
            data: {
                sumDeposit: $('.calc_inputs_block_input_sumDeposit').val(),
                time: $('.calc_inputs_block_input_time').val(),
                replenishment: $('input[name="replenishment"]:checked').val(),
                sumAdd: $('.calc_inputs_block_input_sumReplenishment').val(),

            }
        }).done(function (data) {
            $(".calc_result").html(data);
        });
    }
}
