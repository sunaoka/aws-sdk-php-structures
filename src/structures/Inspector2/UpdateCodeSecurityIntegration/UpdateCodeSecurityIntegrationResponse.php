<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $integrationArn
 * @property 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'INACTIVE'|'DISABLING'|'ESTABLISHING_CONNECTION_IN_PROGRESS'|'ESTABLISHING_CONNECTION_COMPLETED'|'ESTABLISHING_CONNECTION_FAILED'|'PENDING_MANIFEST_CODE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 */
class UpdateCodeSecurityIntegrationResponse extends Response
{
}
