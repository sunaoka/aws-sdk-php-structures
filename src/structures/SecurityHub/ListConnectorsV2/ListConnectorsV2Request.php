<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConnectorsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'JIRA_CLOUD'|'SERVICENOW'|'AZURE'|null $ProviderName
 * @property 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'PENDING_AUTHORIZATION'|'PENDING_CONFIGURATION'|'UNKNOWN'|null $ConnectorStatus
 * @property 'ENABLED'|'PENDING_ENABLEMENT'|'FAILED_TO_ENABLE'|'PENDING_UPDATE'|'FAILED_TO_UPDATE'|'PENDING_DELETION'|'FAILED_TO_DELETE'|null $EnablementStatus
 */
class ListConnectorsV2Request extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     ProviderName?: 'JIRA_CLOUD'|'SERVICENOW'|'AZURE'|null,
     *     ConnectorStatus?: 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'PENDING_AUTHORIZATION'|'PENDING_CONFIGURATION'|'UNKNOWN'|null,
     *     EnablementStatus?: 'ENABLED'|'PENDING_ENABLEMENT'|'FAILED_TO_ENABLE'|'PENDING_UPDATE'|'FAILED_TO_UPDATE'|'PENDING_DELETION'|'FAILED_TO_DELETE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
