<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateOutboundCrossClusterSearchConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DomainInformation $SourceDomainInfo
 * @property Shapes\DomainInformation $DestinationDomainInfo
 * @property string $ConnectionAlias
 * @property Shapes\OutboundCrossClusterSearchConnectionStatus $ConnectionStatus
 * @property string $CrossClusterSearchConnectionId
 */
class CreateOutboundCrossClusterSearchConnectionResponse extends Response
{
}
