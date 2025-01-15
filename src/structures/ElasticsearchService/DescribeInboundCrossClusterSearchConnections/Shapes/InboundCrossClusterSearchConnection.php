<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeInboundCrossClusterSearchConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainInformation|null $SourceDomainInfo
 * @property DomainInformation|null $DestinationDomainInfo
 * @property string|null $CrossClusterSearchConnectionId
 * @property InboundCrossClusterSearchConnectionStatus|null $ConnectionStatus
 */
class InboundCrossClusterSearchConnection extends Shape
{
    /**
     * @param array{
     *     SourceDomainInfo?: DomainInformation|null,
     *     DestinationDomainInfo?: DomainInformation|null,
     *     CrossClusterSearchConnectionId?: string|null,
     *     ConnectionStatus?: InboundCrossClusterSearchConnectionStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
