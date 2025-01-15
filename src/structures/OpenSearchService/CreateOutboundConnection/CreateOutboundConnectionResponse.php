<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateOutboundConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DomainInformationContainer|null $LocalDomainInfo
 * @property Shapes\DomainInformationContainer|null $RemoteDomainInfo
 * @property string|null $ConnectionAlias
 * @property Shapes\OutboundConnectionStatus|null $ConnectionStatus
 * @property string|null $ConnectionId
 * @property 'DIRECT'|'VPC_ENDPOINT'|null $ConnectionMode
 * @property Shapes\ConnectionProperties|null $ConnectionProperties
 */
class CreateOutboundConnectionResponse extends Response
{
}
