
<div class="container row mx-auto border border-secondary w-auto py-4">
    <form method="post" action="index.php?register=true" class="register-form border col-12 col-sm-8 col-md-7 col-lg-4 mx-auto p-0 m-0 px-3 rounded-3">
        <h3 class="text-center my-3">فرم ثبت نام</h3>
        <div class="row g-1 w-auto m-0 my-3 p-0 d-flex justify-content-between align-items-center">
            <div class="col-4 ">
                <label for="" class="form-control m-0 border-0">نام</label>
            </div>
            <div class="col-8">
                <input type="text" name="first_name" class="form-control m-0 ms-1" required>
            </div>
        </div>
        <div class="row g-1 w-auto m-0 my-3 p-0 d-flex justify-content-between align-items-center">
            <div class="col-4 p-0">
                <label for="" class="form-control m-0 border-0 pe-0">نام خانوادگی</label>
            </div>
            <div class="col-8">
                <input type="text" name="last_name" class="form-control m-0 ms-1" required>
            </div>
        </div>
        <div class="row g-1 w-auto m-0 my-3 p-0 d-flex justify-content-between align-items-center">
            <div class="col-4 p-0">
                <label for="" class="form-control m-0 border-0 pe-0">کد ملی</label>
            </div>
            <div class="col-8">
                <input type="number" name="national_code" class="form-control m-0 ms-1" required>
            </div>
        </div>
        <div class="row g-1 w-auto m-0 my-3 p-0 d-flex justify-content-between align-items-center">
            <div class="col-4 p-0">
                <label for="" class="form-control m-0 border-0 pe-0">تاریخ تولد</label>
            </div>
            <div class="col-8">
                <input type = "date" name="date_of_birth" class="form-control m-0 ms-1" required>
            </div>
        </div>
        <div class="row g-1 w-auto m-0 my-3 p-0 d-flex justify-content-between align-items-center">
            <div class="col-4 ">
                <label for="" class="form-control m-0 border-0">جنسیت</label>
            </div>
            <div class="col-8 d-flex justify-content-around">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="زن">
                    <label class="form-check-label" for="flexRadioDefault1">زن</label>
                </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender"  value="مرد" checked>
                    <label class="form-check-label" for="flexRadioDefault2">مرد</label>
                </div>
            </div>
        </div>
        <div class="row g-1 w-auto m-0 my-3 p-0 d-flex justify-content-between align-items-center">
            <div class="col-4 ">
                <label for="" class="form-control m-0 border-0">ایمیل</label>
            </div>
            <div class="col-8">
                <input type="email" name="email" class="form-control m-0 ms-1">
            </div>
        </div>
        <div class="row w-auto m-0 my-3 p-0 d-flex justify-content-between align-items-center">
            <label for="further_details" class="col-12 form-label ">توضیحات تکمیلی</label>
            <div class="col-12 p-0 ps-2 m-0 ">
                <textarea class="m-0 p-0 w-100 form-control" name="further_details" id="further_details" rows="5" ></textarea>
            </div>
          </div>
        <div class="row w-100 d-flex justify-content-evenly align-items-center my-3 mx-0 p-0">
            <div class="col-6 m-0 py-0 px-1">            
                <button type="submit" name="register" value="register" class="btn btn-success m-0 w-100">ثبت</button>
            </div>
            <div class="col-6 m-0 py-0 px-1">
                <button type="reset" class="btn btn-danger m-0 w-100">بازنشانی</button>
            </div>
        </div>
    </form>
</div>