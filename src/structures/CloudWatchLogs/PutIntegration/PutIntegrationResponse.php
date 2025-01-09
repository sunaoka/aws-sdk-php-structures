<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $integrationName
 * @property 'PROVISIONING'|'ACTIVE'|'FAILED' $integrationStatus
 */
class PutIntegrationResponse extends Response
{
}
