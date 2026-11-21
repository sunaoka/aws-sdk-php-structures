<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBaseRefreshSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleId
 * @property KnowledgeBaseRefreshFrequency $ScheduleFrequency
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'ENABLED'|'DISABLED'|null $State
 */
class KnowledgeBaseRefreshScheduleSummary extends Shape
{
    /**
     * @param array{
     *     ScheduleId: string,
     *     ScheduleFrequency: KnowledgeBaseRefreshFrequency,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
