<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeReplay;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReplayName
 * @property string|null $ReplayArn
 * @property string|null $Description
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED'|null $State
 * @property string|null $StateReason
 * @property string|null $EventSourceArn
 * @property Shapes\ReplayDestination|null $Destination
 * @property \Aws\Api\DateTimeResult|null $EventStartTime
 * @property \Aws\Api\DateTimeResult|null $EventEndTime
 * @property \Aws\Api\DateTimeResult|null $EventLastReplayedTime
 * @property \Aws\Api\DateTimeResult|null $ReplayStartTime
 * @property \Aws\Api\DateTimeResult|null $ReplayEndTime
 */
class DescribeReplayResponse extends Response
{
}
