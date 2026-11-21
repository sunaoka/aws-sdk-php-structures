<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateInboundConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $Status
 * @property string $RequestId
 * @property string $InboundConnectorId
 * @property string $Arn
 * @property string $TenantUrl
 * @property 'ENABLED'|'DISABLED' $InboundConnectorStatus
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class CreateInboundConnectorResponse extends Response
{
}
