<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteInboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainInformationContainer $LocalDomainInfo
 * @property DomainInformationContainer $RemoteDomainInfo
 * @property string $ConnectionId
 * @property InboundConnectionStatus $ConnectionStatus
 * @property 'DIRECT'|'VPC_ENDPOINT' $ConnectionMode
 */
class InboundConnection extends Shape
{
    /**
     * @param array{
     *     LocalDomainInfo?: DomainInformationContainer,
     *     RemoteDomainInfo?: DomainInformationContainer,
     *     ConnectionId?: string,
     *     ConnectionStatus?: InboundConnectionStatus,
     *     ConnectionMode?: 'DIRECT'|'VPC_ENDPOINT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
