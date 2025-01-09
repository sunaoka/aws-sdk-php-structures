<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property string $DataAnalysisStartTime
 * @property string $DataAnalysisEndTime
 */
class ScheduleConfig extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     DataAnalysisStartTime?: string,
     *     DataAnalysisEndTime?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
