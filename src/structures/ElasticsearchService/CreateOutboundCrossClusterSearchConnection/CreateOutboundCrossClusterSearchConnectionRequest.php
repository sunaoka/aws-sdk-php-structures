<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateOutboundCrossClusterSearchConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DomainInformation $SourceDomainInfo
 * @property Shapes\DomainInformation $DestinationDomainInfo
 * @property string $ConnectionAlias
 */
class CreateOutboundCrossClusterSearchConnectionRequest extends Request
{
    /**
     * @param array{
     *     SourceDomainInfo: Shapes\DomainInformation,
     *     DestinationDomainInfo: Shapes\DomainInformation,
     *     ConnectionAlias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
