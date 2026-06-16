<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListProspectingFromEngagementTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskId
 * @property string $TaskArn
 * @property string $TaskName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int $TotalEngagementCount
 * @property int $CompletedEngagementCount
 * @property int $FailedEngagementCount
 */
class ProspectingTaskSummary extends Shape
{
    /**
     * @param array{
     *     TaskId: string,
     *     TaskArn: string,
     *     TaskName: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     TotalEngagementCount: int,
     *     CompletedEngagementCount: int,
     *     FailedEngagementCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
