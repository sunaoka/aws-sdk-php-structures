<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateOutboundConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DomainInformationContainer $LocalDomainInfo
 * @property Shapes\DomainInformationContainer $RemoteDomainInfo
 * @property string $ConnectionAlias
 * @property Shapes\OutboundConnectionStatus $ConnectionStatus
 * @property string $ConnectionId
 * @property 'DIRECT'|'VPC_ENDPOINT' $ConnectionMode
 * @property Shapes\ConnectionProperties $ConnectionProperties
 */
class CreateOutboundConnectionResponse extends Response
{
}
