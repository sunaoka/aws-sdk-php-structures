<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicense;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING_DELETE'|'DELETED'|null $Status
 * @property string|null $DeletionDate
 */
class DeleteLicenseResponse extends Response
{
}
