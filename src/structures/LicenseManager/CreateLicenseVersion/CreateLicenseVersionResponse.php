<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LicenseArn
 * @property string $Version
 * @property 'AVAILABLE'|'PENDING_AVAILABLE'|'DEACTIVATED'|'SUSPENDED'|'EXPIRED'|'PENDING_DELETE'|'DELETED' $Status
 */
class CreateLicenseVersionResponse extends Response
{
}
