<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'AZURE'|null $ProviderName
 * @property 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'UNKNOWN'|null $ConnectorStatus
 * @property 'ENABLED'|'PENDING_ENABLEMENT'|'PENDING_UPDATE'|'PENDING_DELETION'|null $EnablementStatus
 */
class ListConnectorsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     ProviderName?: 'AZURE'|null,
     *     ConnectorStatus?: 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'UNKNOWN'|null,
     *     EnablementStatus?: 'ENABLED'|'PENDING_ENABLEMENT'|'PENDING_UPDATE'|'PENDING_DELETION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
