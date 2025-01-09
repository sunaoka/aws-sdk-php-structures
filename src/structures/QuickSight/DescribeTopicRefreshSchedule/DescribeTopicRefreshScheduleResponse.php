<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicRefreshSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TopicId
 * @property string $TopicArn
 * @property string $DatasetArn
 * @property Shapes\TopicRefreshSchedule $RefreshSchedule
 * @property int $Status
 * @property string $RequestId
 */
class DescribeTopicRefreshScheduleResponse extends Response
{
}
