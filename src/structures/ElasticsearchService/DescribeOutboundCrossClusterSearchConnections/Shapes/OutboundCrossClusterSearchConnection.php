<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeOutboundCrossClusterSearchConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainInformation|null $SourceDomainInfo
 * @property DomainInformation|null $DestinationDomainInfo
 * @property string|null $CrossClusterSearchConnectionId
 * @property string|null $ConnectionAlias
 * @property OutboundCrossClusterSearchConnectionStatus|null $ConnectionStatus
 */
class OutboundCrossClusterSearchConnection extends Shape
{
    /**
     * @param array{
     *     SourceDomainInfo?: DomainInformation|null,
     *     DestinationDomainInfo?: DomainInformation|null,
     *     CrossClusterSearchConnectionId?: string|null,
     *     ConnectionAlias?: string|null,
     *     ConnectionStatus?: OutboundCrossClusterSearchConnectionStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
