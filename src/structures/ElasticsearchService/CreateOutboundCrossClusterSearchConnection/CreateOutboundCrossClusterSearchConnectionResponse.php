<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateOutboundCrossClusterSearchConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DomainInformation|null $SourceDomainInfo
 * @property Shapes\DomainInformation|null $DestinationDomainInfo
 * @property string|null $ConnectionAlias
 * @property Shapes\OutboundCrossClusterSearchConnectionStatus|null $ConnectionStatus
 * @property string|null $CrossClusterSearchConnectionId
 */
class CreateOutboundCrossClusterSearchConnectionResponse extends Response
{
}
