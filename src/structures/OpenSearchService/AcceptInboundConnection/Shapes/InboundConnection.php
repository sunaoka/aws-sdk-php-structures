<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AcceptInboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainInformationContainer|null $LocalDomainInfo
 * @property DomainInformationContainer|null $RemoteDomainInfo
 * @property string|null $ConnectionId
 * @property InboundConnectionStatus|null $ConnectionStatus
 * @property 'DIRECT'|'VPC_ENDPOINT'|null $ConnectionMode
 */
class InboundConnection extends Shape
{
    /**
     * @param array{
     *     LocalDomainInfo?: DomainInformationContainer|null,
     *     RemoteDomainInfo?: DomainInformationContainer|null,
     *     ConnectionId?: string|null,
     *     ConnectionStatus?: InboundConnectionStatus|null,
     *     ConnectionMode?: 'DIRECT'|'VPC_ENDPOINT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
