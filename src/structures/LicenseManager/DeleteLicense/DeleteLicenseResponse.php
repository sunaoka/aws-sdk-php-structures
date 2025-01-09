<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicense;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING_DELETE'|'DELETED' $Status
 * @property string $DeletionDate
 */
class DeleteLicenseResponse extends Response
{
}
