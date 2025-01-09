<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingArn
 * @property JobExecutionSummary $jobExecutionSummary
 */
class JobExecutionSummaryForJob extends Shape
{
    /**
     * @param array{
     *     thingArn?: string,
     *     jobExecutionSummary?: JobExecutionSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
