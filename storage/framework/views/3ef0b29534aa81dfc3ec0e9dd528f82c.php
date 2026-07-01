<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;padding:0;background:#f3f4f6;font-family:Arial,sans-serif">
<table width="100%" cellpadding="0" cellspacing="0"><tr><td align="center" style="padding:32px 12px">
  <table width="620" cellpadding="0" cellspacing="0" style="max-width:620px;background:#fff;border:1px solid #e5e7eb;border-radius:8px;overflow:hidden">
    <tr><td style="background:#1e3a5f;padding:24px 32px;color:#fff;font-size:20px;font-weight:bold"><?php echo e(config('app.name', 'HRMS')); ?></td></tr>
    <tr><td style="padding:32px;color:#374151;font-size:15px;line-height:1.7">
      <p style="margin:0 0 18px">Dear <?php echo e($employee->first_name ?? 'Employee'); ?>,</p>
      <p style="margin:0 0 18px">
        Welcome to the team. Please complete your initial employee details and upload the requested onboarding documents using the secure link below.
      </p>
      <p style="margin:0 0 24px;text-align:center">
        <a href="<?php echo e($onboardingUrl); ?>" style="display:inline-block;background:#facc15;color:#111827;text-decoration:none;font-weight:bold;padding:13px 22px;border-radius:6px">
          Complete Onboarding Details
        </a>
      </p>
      <p style="margin:0 0 18px">
        The form asks for phone number, date of birth, address, bank details, ID/Iqama details, and optional passport details. You can also upload signed offer letter, latest CV, ID/Iqama, bank details, HDF, experience certificate, and passport document.
      </p>
      <?php if($loginEmail): ?>
        <table width="100%" cellpadding="0" cellspacing="0" style="margin:0 0 18px;border:1px solid #e5e7eb;border-radius:6px">
          <tr><td style="padding:14px 16px;background:#f9fafb;color:#111827;font-weight:bold">Login Details</td></tr>
          <tr><td style="padding:14px 16px">
            <div><strong>Email:</strong> <?php echo e($loginEmail); ?></div>
            <?php if($tempPassword): ?><div><strong>Temporary Password:</strong> <?php echo e($tempPassword); ?></div><?php endif; ?>
          </td></tr>
        </table>
      <?php endif; ?>
      <?php if($expiresAt): ?>
        <p style="margin:0 0 18px;color:#6b7280">This secure link is valid until <?php echo e($expiresAt); ?>.</p>
      <?php endif; ?>
      <p style="margin:0;color:#6b7280;font-size:13px">If the button does not open, copy this link into your browser:<br><?php echo e($onboardingUrl); ?></p>
    </td></tr>
    <tr><td style="background:#f9fafb;padding:16px 32px;border-top:1px solid #e5e7eb;color:#9ca3af;font-size:11px;text-align:center">This is an automated onboarding notification.</td></tr>
  </table>
</td></tr></table>
</body>
</html>
<?php /**PATH E:\Xampp_new\htdocs\hrportal\backend\resources\views/emails/new-hire-onboarding-link.blade.php ENDPATH**/ ?>