<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicense;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LicenseArn
 * @property 'AVAILABLE'|'PENDING_AVAILABLE'|'DEACTIVATED'|'SUSPENDED'|'EXPIRED'|'PENDING_DELETE'|'DELETED' $Status
 * @property string $Version
 */
class CreateLicenseResponse extends Response
{
}
