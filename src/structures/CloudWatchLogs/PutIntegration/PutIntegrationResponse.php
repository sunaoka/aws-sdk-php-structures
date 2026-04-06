<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $integrationName
 * @property 'PROVISIONING'|'ACTIVE'|'FAILED'|null $integrationStatus
 */
class PutIntegrationResponse extends Response
{
}
