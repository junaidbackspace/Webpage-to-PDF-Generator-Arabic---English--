<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Slip</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            font-size: 16px; /* Adjust the base font size */
            margin: 0;
            padding: 0;
            
        }

        /* Adjust font size for specific elements */
        p {
            font-size: 14px; /* Adjust paragraph font size */
        }

        .container {
            display: flex;
            justify-content: space-between;
        }

        .column {
            width: 44%;
            padding: 20px;
            margin-bottom: 20px;
        }

        @media screen and (max-width: 768px) {
            /* Font size for small screens (e.g., mobile devices) */
            body {
                font-size: 10px;
                
            }
            p {
                font-size: 8px;
                
            }
        }

        @media screen and (max-width: 480px) {
            /* Font size for extra small screens (e.g., smaller mobile devices) */
            body {
                font-size: 7px;
            }
        }
    </style>
</head>
<body>

<!-- Add a button to trigger PDF generation -->
<button class="button" onclick="generatePDF()">Generate PDF</button>

<div id="content">
<img src="{{ asset('images/logo.png') }}" alt="Logo">
    <div class="container">
      
    <div class="column">
           
            <p><strong>Date:</strong> 26/03/2024</p>
            <p><strong>Ref:</strong> HAS-SPL3303262024</p>
            <p><strong>To:</strong> United States Embassy in Abu Dhabi</p>
            <p><strong>Subject:</strong> Certificate Salary</p>
            <p><strong>HASTY Administrative Services - SOLE PROPRIETORSHIP - C.L.L</strong></p>
            <p>This is to certify that the below-mentioned employee is working with us and still on duty up to date.</p>
            <p><strong>Name:</strong> Muhammad Qasim Akbar Aziz</p>
            <p><strong>Nationality:</strong> Pakistan</p>
            <p><strong>Passport No:</strong> BV4852932</p>
            <p><strong>ID:</strong> 784-1996-3983810-3</p>
            <p><strong>Position:</strong> CHIEF EXECUTIVE OFFICER</p>
            <p><strong>Monthly Salary:</strong> 5000</p>
            <p><strong>Date of Employment:</strong> 07-07-2022</p>
            <p style="margin-top:30px;">This certificate has been given to the employee upon their request without assuming any liability whatsoever, and it does not constitute any liability, undertaking, and financial guarantee on our part to you or any third party.</p>
            <p>This certificate can be used by the addressee and the addressee only and is valid for 3 months from the date of issuance.</p>
        </div>
        <div class="column"  dir="rtl">
        
            <p><strong>التاريخ:</strong> 26/03/2024</p>
            <p><strong>المرجع:</strong> HAS-SPL3303262024</p>
            <p><strong>إلى:</strong> السفارة الأمريكية في أبوظبي</p>
            <p><strong>الموضوع:</strong> شهادة الراتب</p>
            <p>هاستي للخدمات الإدارية - شركة الشخص الواحد - C.L.L</p>
            <p>نشهد بأن الموظف المذكور أدناه يعمل معنا وما زال في الخدمة حتى تاريخه.</p>
            <p><strong>الاسم:</strong> محمد قاسم عزيز أكبر</p>
            <p><strong>الجنسية:</strong> باكستان</p>
            <p><strong>رقم الجواز:</strong> BV4852932</p>
            <p><strong>الهوية:</strong> 784-1996-3983810-3</p>
            <p><strong>الوظيفة:</strong> الرئيس التنفيذي</p>
            <p><strong>الراتب الشهري:</strong> 5000</p>
            <p><strong>تاريخ التوظيف:</strong> 07-07-2022</p>
            <p style="margin-top:40px;">تم إصدار هذه الشهادة للموظف بناءً على طلبه دون تحمل أي مسؤولية من جانبنا، ولا تشكل أي التزام أو تعهد أو ضمان مالي من جانبنا لكم أو لأي طرف ثالث.</p>
            <p>يمكن استخدام هذه الشهادة من قبل المرسل إليه فقط وهي صالحة لمدة 3 أشهر فقط من تاريخ الإصدار.</p>
        </div>
    </div>
    <img style = "margin-left:40%;" src="{{ asset('images/sign.png') }}" alt="Signature">
    <div style="display: flex; justify-content: center; align-items: center; ">
        
        <div style="text-align: center; margin-left: 20px;">
            <p><strong>Muhammad Qasim</strong></p>
            <p>Managing Director</p>
            <p><strong>Email:</strong></p>
            <p><strong>Number:</strong></p>
        </div>
        <img src="{{ asset('images/stamp.png') }}" alt="Stamp" style="margin-left: 20px;">
    </div>
    <div style="text-align: center; margin-top: 20px;">
       
        <strong>Address:</strong> Office 16, M09. Abu Dhabi, UAE
    </div>
    <div class="column" style="text-align: center; margin-top: 20px;">
        <p style="width: 60%;">This is a system-generated eSigned letter and doesn't require any physical signature or stamp. Click Here for variations</p>
    </div>
</div>

<!-- Include html2pdf using a script tag -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<script>
function generatePDF() {
    const content = document.getElementById('content');

    // Configure options for pdf generation
    const options = {
        filename: 'SalarySlip.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    // Generate PDF
    html2pdf().from(content).set(options).save();
}
</script>

</body>
</html>
