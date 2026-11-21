<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListInboundConnectorApplicationAssociations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $Status
 * @property string $RequestId
 * @property list<Shapes\InboundConnectorApplicationAssociationSummary> $ApplicationAssociations
 * @property string|null $NextToken
 */
class ListInboundConnectorApplicationAssociationsResponse extends Response
{
}
