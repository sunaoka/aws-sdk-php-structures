<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LicenseArn
 * @property string|null $Version
 * @property 'AVAILABLE'|'PENDING_AVAILABLE'|'DEACTIVATED'|'SUSPENDED'|'EXPIRED'|'PENDING_DELETE'|'DELETED'|null $Status
 */
class CreateLicenseVersionResponse extends Response
{
}
