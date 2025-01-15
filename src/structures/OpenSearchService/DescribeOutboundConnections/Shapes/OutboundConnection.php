<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeOutboundConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainInformationContainer|null $LocalDomainInfo
 * @property DomainInformationContainer|null $RemoteDomainInfo
 * @property string|null $ConnectionId
 * @property string|null $ConnectionAlias
 * @property OutboundConnectionStatus|null $ConnectionStatus
 * @property 'DIRECT'|'VPC_ENDPOINT'|null $ConnectionMode
 * @property ConnectionProperties|null $ConnectionProperties
 */
class OutboundConnection extends Shape
{
    /**
     * @param array{
     *     LocalDomainInfo?: DomainInformationContainer|null,
     *     RemoteDomainInfo?: DomainInformationContainer|null,
     *     ConnectionId?: string|null,
     *     ConnectionAlias?: string|null,
     *     ConnectionStatus?: OutboundConnectionStatus|null,
     *     ConnectionMode?: 'DIRECT'|'VPC_ENDPOINT'|null,
     *     ConnectionProperties?: ConnectionProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
