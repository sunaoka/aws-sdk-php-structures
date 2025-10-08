<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConnectorsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JIRA_CLOUD'|'SERVICENOW'|null $ProviderName
 * @property 'CONNECTED'|'FAILED_TO_CONNECT'|'PENDING_CONFIGURATION'|'PENDING_AUTHORIZATION'|null $ConnectorStatus
 */
class ProviderSummary extends Shape
{
    /**
     * @param array{
     *     ProviderName?: 'JIRA_CLOUD'|'SERVICENOW'|null,
     *     ConnectorStatus?: 'CONNECTED'|'FAILED_TO_CONNECT'|'PENDING_CONFIGURATION'|'PENDING_AUTHORIZATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
