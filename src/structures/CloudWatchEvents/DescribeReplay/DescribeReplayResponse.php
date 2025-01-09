<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeReplay;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReplayName
 * @property string $ReplayArn
 * @property string $Description
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED' $State
 * @property string $StateReason
 * @property string $EventSourceArn
 * @property Shapes\ReplayDestination $Destination
 * @property \Aws\Api\DateTimeResult $EventStartTime
 * @property \Aws\Api\DateTimeResult $EventEndTime
 * @property \Aws\Api\DateTimeResult $EventLastReplayedTime
 * @property \Aws\Api\DateTimeResult $ReplayStartTime
 * @property \Aws\Api\DateTimeResult $ReplayEndTime
 */
class DescribeReplayResponse extends Response
{
}
