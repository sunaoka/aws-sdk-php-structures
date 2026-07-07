<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConnectorsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JIRA_CLOUD'|'SERVICENOW'|'AZURE'|null $ProviderName
 * @property 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'PENDING_AUTHORIZATION'|'PENDING_CONFIGURATION'|'UNKNOWN'|null $ConnectorStatus
 * @property ProviderDetail|null $ProviderConfiguration
 */
class ProviderSummary extends Shape
{
    /**
     * @param array{
     *     ProviderName?: 'JIRA_CLOUD'|'SERVICENOW'|'AZURE'|null,
     *     ConnectorStatus?: 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'PENDING_AUTHORIZATION'|'PENDING_CONFIGURATION'|'UNKNOWN'|null,
     *     ProviderConfiguration?: ProviderDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
