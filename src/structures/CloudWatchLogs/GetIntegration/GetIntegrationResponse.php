<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $integrationName
 * @property 'OPENSEARCH' $integrationType
 * @property 'PROVISIONING'|'ACTIVE'|'FAILED' $integrationStatus
 * @property Shapes\IntegrationDetails $integrationDetails
 */
class GetIntegrationResponse extends Response
{
}
