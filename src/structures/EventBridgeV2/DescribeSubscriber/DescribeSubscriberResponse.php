<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SubscriberArn
 * @property string|null $Name
 * @property string|null $EventBusArn
 * @property Shapes\InvokeConfiguration|null $InvokeConfiguration
 * @property string|null $Description
 * @property Shapes\FilterConfiguration|null $FilterConfiguration
 * @property 'FIFO'|'UNORDERED'|null $Type
 * @property 'LATEST'|'POINT_IN_TIME'|null $StartingPosition
 * @property Shapes\PointInTimeConfiguration|null $PointInTimeConfiguration
 * @property Shapes\BatchConfiguration|null $BatchConfiguration
 * @property Shapes\Transformer|null $Transformer
 * @property Shapes\RetryPolicy|null $RetryPolicy
 * @property Shapes\OnFailureConfiguration|null $OnFailureConfiguration
 * @property Shapes\LogConfiguration|null $LogConfiguration
 * @property 'RUNNING'|'STOPPED'|null $State
 * @property bool|null $Revoked
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class DescribeSubscriberResponse extends Response
{
}
