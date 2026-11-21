<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListKnowledgeBaseRefreshSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAILY'|'WEEKLY'|'MONTHLY'|'HOURLY' $Interval
 * @property KnowledgeBaseScheduleRefreshOnEntity|null $RefreshOnDay
 */
class KnowledgeBaseRefreshFrequency extends Shape
{
    /**
     * @param array{
     *     Interval: 'DAILY'|'WEEKLY'|'MONTHLY'|'HOURLY',
     *     RefreshOnDay?: KnowledgeBaseScheduleRefreshOnEntity|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
