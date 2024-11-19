<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    
    <div class="container-md">
     <h1>ผู้ส่ง</h1>
     <a href = "show.php">ไปยังหน้าแสดงข้อมูล</a>
     <form class="row g-3 needs-validation" method="POST" action="insert.php" novalidate >
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">ชื่อจริง</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Mark" required  name="fname1">
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please enter first name
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label" >นามสกุล</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Otto" required name="lname1">
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please enter last name
          </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label" >เบอร์โทร</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="0123456789" required name="phone1">
            <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please enter phone
              </div>
          </div>
        <div class="col-md-3">
          <label for="validationCustom03" class="form-label">บ้านเลขที่และหมู่</label>
          <input type="text" class="form-control" id="validationCustom03" required placeholder="111/99 M.55 "  name="address1">
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please enter address
          </div>
        </div>
        <div class="col-md-3">
          <label for="sender-province" class="form-label" >จังหวัด</label>
          <select class="form-select" id="sender-province" required onchange="updateAmphoe('sender')" name="province1" >
            <option value="">-- เลือกจังหวัด --</option>
          </select>
          <div class="invalid-feedback">Please enter province</div>
        </div>

        <div class="col-md-3">
          <label for="sender-amphoe" class="form-label">อำเภอ</label>
          <select id="sender-amphoe" class="form-select" onchange="updateTambon('sender')" disabled required name="tambon1">
            <option value="">-- เลือกอำเภอ --</option>
          </select>
          <div class="invalid-feedback">Please enter district</div>
        </div>

        <div class="col-md-3">
          <label for="sender-subdistrict" class="form-label" >ตำบล</label>
          <select class="form-select" id="sender-subdistrict" required disabled name="sub1">
            <option value="">-- เลือกตำบล --</option>
          </select>
          <div class="invalid-feedback">Please enter place</div>
        </div>

          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="70000" required name="post1">
            <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please enter post code
              </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">วันที่</label>
            <input type="date" class="form-control" id="validationCustom02"  required name="date1">
            <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please enter date
              </div>
          </div>

          <h1>ผู้รับ</h1>
          <form class="row g-3 needs-validation" novalidate>
             <div class="col-md-4">
               <label for="validationCustom01" class="form-label">ชื่อจริง</label>
               <input type="text" class="form-control" id="validationCustom01" placeholder="Mark" required name="fname2">
               <div class="valid-feedback">
                 Looks good!
               </div>
               <div class="invalid-feedback">
                 Please enter first name
               </div>
             </div>
             <div class="col-md-4">
               <label for="validationCustom02" class="form-label">นามสกุล</label>
               <input type="text" class="form-control" id="validationCustom02" placeholder="Otto" required name="lname2">
               <div class="valid-feedback">
                 Looks good!
               </div>
               <div class="invalid-feedback">
                 Please enter last name
               </div>
             </div>
             <div class="col-md-4">
                 <label for="validationCustom02" class="form-label">เบอร์โทร</label>
                 <input type="text" class="form-control" id="validationCustom02" placeholder="0123456789" required name="phone2">
                 <div class="valid-feedback">
                     Looks good!
                   </div>
                   <div class="invalid-feedback">
                     Please enter phone
                   </div>
               </div>
             <div class="col-md-3">
               <label for="validationCustom03" class="form-label">บ้านเลขที่และหมู่</label>
               <input type="text" class="form-control" id="validationCustom03" required placeholder="111/99 M.55" name="address2">
               <div class="valid-feedback">
                 Looks good!
               </div>
               <div class="invalid-feedback">
                 Please enter address
               </div>
             </div>
             <div class="col-md-3">
              <label for="receiver-province" class="form-label">จังหวัด</label>
              <select class="form-select" id="receiver-province" required onchange="updateAmphoe('receiver')" name="province2">
                <option value="">-- เลือกจังหวัด --</option>
              </select>
              <div class="invalid-feedback">Please enter province</div>
            </div>
    
            <div class="col-md-3">
              <label for="receiver-amphoe" class="form-label">อำเภอ</label>
              <select id="receiver-amphoe" class="form-select" onchange="updateTambon('receiver')" disabled required name="tambon2">
                <option value="">-- เลือกอำเภอ --</option>
              </select>
              <div class="invalid-feedback">Please enter district</div>
            </div>
    
            <div class="col-md-3">
              <label for="receiver-subdistrict" class="form-label">ตำบล</label>
              <select class="form-select" id="receiver-subdistrict" required disabled name="sub2">
                <option value="">-- เลือกตำบล --</option>
              </select>
              <div class="invalid-feedback">Please enter place</div>
            </div>
               
               <div class="col-md-4">
                 <label for="validationCustom02" class="form-label">รหัสไปรษณีย์</label>
                 <input type="text" class="form-control" id="validationCustom02" placeholder="70000" required name="post2">
                 <div class="valid-feedback">
                     Looks good!
                   </div>
                   <div class="invalid-feedback">
                     Please enter post code
                   </div>
               </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              ยืนยันความถูกต้อง
            </label>
            <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please check
              </div>
          </div>
        </div>
          
        <div class="col-12">
          <button class="btn btn-primary" type="submit" name="submitall" id="submit">Submit</button>
        </div>
        <script>
          let provincesData = {};
          fetch("https://raw.githubusercontent.com/kongvut/thai-province-data/master/api_province.json")
            .then(response => response.json())
            .then(data => {
              provincesData = data;
              populateProvinces('sender');
              populateProvinces('receiver');
            })
            .catch(error => console.error("Error loading province data:", error));
    
          function populateProvinces(formIdPrefix) {
            const provinceSelect = document.getElementById(`${formIdPrefix}-province`);
            provincesData.forEach(province => {
              let option = document.createElement("option");
              option.value = province.id;
              option.textContent = province.name_th;
              provinceSelect.appendChild(option);
            });
          }
    
          function updateAmphoe(formIdPrefix) {
            const provinceId = document.getElementById(`${formIdPrefix}-province`).value;
            const amphoeSelect = document.getElementById(`${formIdPrefix}-amphoe`);
            const subdistrictSelect = document.getElementById(`${formIdPrefix}-subdistrict`);
            amphoeSelect.innerHTML = "<option value=''>-- เลือกอำเภอ --</option>";
            subdistrictSelect.innerHTML = "<option value=''>-- เลือกตำบล --</option>";
            subdistrictSelect.disabled = true;
    
            if (!provinceId) {
              amphoeSelect.disabled = true;
              return;
            }
            amphoeSelect.disabled = false;
            fetch("https://raw.githubusercontent.com/kongvut/thai-province-data/master/api_amphure.json")
              .then(response => response.json())
              .then(data => {
                const amphoes = data.filter(amphoe => amphoe.province_id == provinceId);
                amphoes.forEach(amphoe => {
                  let option = document.createElement("option");
                  option.value = amphoe.id;
                  option.textContent = amphoe.name_th;
                  amphoeSelect.appendChild(option);
                });
              })
              .catch(error => console.error("Error loading amphoe data:", error));
          }
    
          function updateTambon(formIdPrefix) {
            const amphoeId = document.getElementById(`${formIdPrefix}-amphoe`).value;
            const subdistrictSelect = document.getElementById(`${formIdPrefix}-subdistrict`);
            subdistrictSelect.innerHTML = "<option value=''>-- เลือกตำบล --</option>";
    
            if (!amphoeId) {
              subdistrictSelect.disabled = true;
              return;
            }
            subdistrictSelect.disabled = false;
            fetch("https://raw.githubusercontent.com/kongvut/thai-province-data/master/api_tambon.json")
              .then(response => response.json())
              .then(data => {
                const tambons = data.filter(tambon => tambon.amphure_id == amphoeId);
                tambons.forEach(tambon => {
                  let option = document.createElement("option");
                  option.value = tambon.id;
                  option.textContent = tambon.name_th;
                  subdistrictSelect.appendChild(option);
                });
              })
              .catch(error => console.error("Error loading tambon data:", error));
          }
        </script>

      </form>
      
      <script>
        (() => {
          'use strict'
      
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          const forms = document.querySelectorAll('.needs-validation')
      
          // Loop over them and prevent submission
          Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
              if (!form.checkValidity()) {
                event.preventDefault() // หยุดการส่งฟอร์ม
                event.stopPropagation() // หยุดการดำเนินการต่อ
              } 
      
              form.classList.add('was-validated') // เพิ่มคลาส was-validated เพื่อแสดงผลการตรวจสอบ
            }, false)
          })
        })()
      </script>
      


  </body>
</html>