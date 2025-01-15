<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicense;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LicenseArn
 * @property 'AVAILABLE'|'PENDING_AVAILABLE'|'DEACTIVATED'|'SUSPENDED'|'EXPIRED'|'PENDING_DELETE'|'DELETED'|null $Status
 * @property string|null $Version
 */
class CreateLicenseResponse extends Response
{
}
