<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicRefreshSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TopicId
 * @property string|null $TopicArn
 * @property string|null $DatasetArn
 * @property Shapes\TopicRefreshSchedule|null $RefreshSchedule
 * @property int|null $Status
 * @property string|null $RequestId
 */
class DescribeTopicRefreshScheduleResponse extends Response
{
}
