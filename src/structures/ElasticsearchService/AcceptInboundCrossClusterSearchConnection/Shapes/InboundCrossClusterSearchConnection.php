<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\AcceptInboundCrossClusterSearchConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainInformation $SourceDomainInfo
 * @property DomainInformation $DestinationDomainInfo
 * @property string $CrossClusterSearchConnectionId
 * @property InboundCrossClusterSearchConnectionStatus $ConnectionStatus
 */
class InboundCrossClusterSearchConnection extends Shape
{
    /**
     * @param array{
     *     SourceDomainInfo?: DomainInformation,
     *     DestinationDomainInfo?: DomainInformation,
     *     CrossClusterSearchConnectionId?: string,
     *     ConnectionStatus?: InboundCrossClusterSearchConnectionStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
