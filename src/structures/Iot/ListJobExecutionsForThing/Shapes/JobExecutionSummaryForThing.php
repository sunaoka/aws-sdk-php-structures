<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForThing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobId
 * @property JobExecutionSummary|null $jobExecutionSummary
 */
class JobExecutionSummaryForThing extends Shape
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     jobExecutionSummary?: JobExecutionSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
