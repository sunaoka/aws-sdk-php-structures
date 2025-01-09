<?php

namespace Sunaoka\Aws\Structures\LicenseManager\RejectGrant;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GrantArn
 * @property 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'PENDING_DELETE'|'DISABLED'|'WORKFLOW_COMPLETED' $Status
 * @property string $Version
 */
class RejectGrantResponse extends Response
{
}
