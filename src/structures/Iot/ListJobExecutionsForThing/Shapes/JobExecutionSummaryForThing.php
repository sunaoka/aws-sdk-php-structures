<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForThing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property JobExecutionSummary $jobExecutionSummary
 */
class JobExecutionSummaryForThing extends Shape
{
    /**
     * @param array{
     *     jobId?: string,
     *     jobExecutionSummary?: JobExecutionSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
