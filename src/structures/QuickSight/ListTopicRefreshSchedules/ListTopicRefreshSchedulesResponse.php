<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicRefreshSchedules;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TopicId
 * @property string $TopicArn
 * @property list<Shapes\TopicRefreshScheduleSummary> $RefreshSchedules
 * @property int $Status
 * @property string $RequestId
 */
class ListTopicRefreshSchedulesResponse extends Response
{
}
