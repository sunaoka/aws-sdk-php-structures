<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConnectorsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'JIRA_CLOUD'|'SERVICENOW'|null $ProviderName
 * @property 'CONNECTED'|'FAILED_TO_CONNECT'|'PENDING_CONFIGURATION'|'PENDING_AUTHORIZATION'|null $ConnectorStatus
 */
class ListConnectorsV2Request extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     ProviderName?: 'JIRA_CLOUD'|'SERVICENOW'|null,
     *     ConnectorStatus?: 'CONNECTED'|'FAILED_TO_CONNECT'|'PENDING_CONFIGURATION'|'PENDING_AUTHORIZATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
