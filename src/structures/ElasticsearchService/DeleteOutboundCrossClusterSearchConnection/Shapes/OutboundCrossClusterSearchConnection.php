<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteOutboundCrossClusterSearchConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainInformation $SourceDomainInfo
 * @property DomainInformation $DestinationDomainInfo
 * @property string $CrossClusterSearchConnectionId
 * @property string $ConnectionAlias
 * @property OutboundCrossClusterSearchConnectionStatus $ConnectionStatus
 */
class OutboundCrossClusterSearchConnection extends Shape
{
    /**
     * @param array{
     *     SourceDomainInfo?: DomainInformation,
     *     DestinationDomainInfo?: DomainInformation,
     *     CrossClusterSearchConnectionId?: string,
     *     ConnectionAlias?: string,
     *     ConnectionStatus?: OutboundCrossClusterSearchConnectionStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
