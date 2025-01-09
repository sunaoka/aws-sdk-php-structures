<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteOutboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainInformationContainer $LocalDomainInfo
 * @property DomainInformationContainer $RemoteDomainInfo
 * @property string $ConnectionId
 * @property string $ConnectionAlias
 * @property OutboundConnectionStatus $ConnectionStatus
 * @property 'DIRECT'|'VPC_ENDPOINT' $ConnectionMode
 * @property ConnectionProperties $ConnectionProperties
 */
class OutboundConnection extends Shape
{
    /**
     * @param array{
     *     LocalDomainInfo?: DomainInformationContainer,
     *     RemoteDomainInfo?: DomainInformationContainer,
     *     ConnectionId?: string,
     *     ConnectionAlias?: string,
     *     ConnectionStatus?: OutboundConnectionStatus,
     *     ConnectionMode?: 'DIRECT'|'VPC_ENDPOINT',
     *     ConnectionProperties?: ConnectionProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
