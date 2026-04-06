<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $integrationName
 * @property 'OPENSEARCH'|null $integrationType
 * @property 'PROVISIONING'|'ACTIVE'|'FAILED'|null $integrationStatus
 * @property Shapes\IntegrationDetails|null $integrationDetails
 */
class GetIntegrationResponse extends Response
{
}
