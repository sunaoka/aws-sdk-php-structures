<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicRefreshSchedules;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TopicId
 * @property string|null $TopicArn
 * @property list<Shapes\TopicRefreshScheduleSummary>|null $RefreshSchedules
 * @property int|null $Status
 * @property string|null $RequestId
 */
class ListTopicRefreshSchedulesResponse extends Response
{
}
