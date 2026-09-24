<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateSubscriber;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SubscriberArn
 * @property string|null $Name
 * @property string|null $EventBusArn
 * @property 'FIFO'|'UNORDERED'|null $Type
 * @property 'LATEST'|'POINT_IN_TIME'|null $StartingPosition
 * @property Shapes\PointInTimeConfiguration|null $PointInTimeConfiguration
 * @property 'RUNNING'|'STOPPED'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class CreateSubscriberResponse extends Response
{
}
