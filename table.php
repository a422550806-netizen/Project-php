<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>لوحة إنجازات الطلاب</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #3b3b3b, #4f4f4f, #212121);
      font-family: 'Cairo', sans-serif;
      margin: 0;
      padding: 0;
      color: #f5f5f5;
    }

    .container {
      max-width: 600px;
      margin: auto;
      padding: 20px;
    }

    h2 {
      text-align: center;
      font-size: 34px;
      color: #FFD700;
      margin-bottom: 30px;
      font-weight: bold;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
    }

    .card {
      background: rgba(255, 215, 0, 0.08);
      backdrop-filter: blur(12px);
      border-radius: 15px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.25);
      padding: 15px;
      text-align: center;
      transition: transform 0.3s ease, background 0.3s ease;
      animation: fadeIn 0.8s ease forwards;
      opacity: 0;
      border: 1px solid rgba(255, 215, 0, 0.3);
    }

    .card:hover {
      transform: scale(1.05);
      background: rgba(255, 215, 0, 0.15);
    }

    .card h6 {
      font-size: 1.2rem;
      font-weight: bold;
      color: #FFD700;
      margin-bottom: 8px;
    }

    .card p.label {
      font-size: 1rem;
      margin: 4px 0;
      color: #eeeeee;
      font-weight: bold;
    }

    .card p .email-code {
      color: #4fc3f7;
      font-weight: bold;
      font-size: 0.95rem;
    }

    .single-card {
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .badge-box {
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .badge {
      font-size: 1.4rem;
      padding: 18px 36px;
      border-radius: 50px;
      background: linear-gradient(90deg, #FFD700, #fbc02d, #ff9800);
      box-shadow: 0 6px 15px rgba(0,0,0,0.3);
      color: #212121;
      font-weight: bold;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<div class="container">
  <h2>🎓 لوحة إنجازات الطلاب</h2>

  <div class="grid">
    <?php
    $students = [
      ['stdNo' => '20003', 'stdName' => 'Ahmed Ali', 'stdEmail' => 'ahmed@gmail.com', 'stdGAP' => 88.7],
      ['stdNo' => '30004', 'stdName' => 'Mona Khalid', 'stdEmail' => 'mona@gmail.com', 'stdGAP' => 78.5],
      ['stdNo' => '10002', 'stdName' => 'Bilal Hamza', 'stdEmail' => 'bilal@gmail.com', 'stdGAP' => 90.6],
      ['stdNo' => '50001', 'stdName' => 'Saeid Ali', 'stdEmail' => 'saeid@gmail.com', 'stdGAP' => 88.1],
      ['stdNo' => '10007', 'stdName' => 'Mohammed Ahmed', 'stdEmail' => 'mohammed@gmail.com', 'stdGAP' => 85.6]
    ];

    for ($i = 0; $i < count($students) - 1; $i++):
      $student = $students[$i];
      $delay = $i * 0.2;
    ?>
      <div class="card" style="animation-delay: <?= $delay ?>s;">
        <h6><?= $student['stdName'] ?></h6>
        <p class="label">👤 رقم الطالب : <?= $student['stdNo'] ?></p>
        <p class="label">📧 الايميل : <span class="email-code"><?= $student['stdEmail'] ?></span></p>
        <p class="label">📊 المعدل : <?= $student['stdGAP'] ?>%</p>
      </div>
    <?php endfor; ?>
  </div>

  <div class="single-card">
    <?php $last = end($students); ?>
    <div class="card" style="animation-delay: 1s; max-width:250px;">
      <h6><?= $last['stdName'] ?></h6>
      <p class="label">👤 رقم الطالب : <?= $last['stdNo'] ?></p>
      <p class="label">📧 الايميل : <span class="email-code"><?= $last['stdEmail'] ?></span></p>
      <p class="label">📊 المعدل : <?= $last['stdGAP'] ?>%</p>
    </div>
  </div>

  <div class="badge-box">
    <span class="badge">إجمالي عدد الطلاب: <?= count($students) ?></span>
  </div>
</div>

</body>
</html>