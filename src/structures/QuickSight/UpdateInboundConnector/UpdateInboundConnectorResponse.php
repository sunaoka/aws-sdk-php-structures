<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateInboundConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $Status
 * @property string $RequestId
 * @property string $InboundConnectorId
 * @property string $Arn
 * @property 'ENABLED'|'DISABLED' $InboundConnectorStatus
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class UpdateInboundConnectorResponse extends Response
{
}
