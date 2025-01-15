<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingArn
 * @property JobExecutionSummary|null $jobExecutionSummary
 */
class JobExecutionSummaryForJob extends Shape
{
    /**
     * @param array{
     *     thingArn?: string|null,
     *     jobExecutionSummary?: JobExecutionSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
