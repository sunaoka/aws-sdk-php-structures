<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateGrantVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GrantArn
 * @property 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'PENDING_DELETE'|'DISABLED'|'WORKFLOW_COMPLETED' $Status
 * @property string $Version
 */
class CreateGrantVersionResponse extends Response
{
}
