<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListInboundConnectors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $Status
 * @property string $RequestId
 * @property list<Shapes\InboundConnectorSummary> $InboundConnectorSummaries
 * @property string|null $NextToken
 */
class ListInboundConnectorsResponse extends Response
{
}
