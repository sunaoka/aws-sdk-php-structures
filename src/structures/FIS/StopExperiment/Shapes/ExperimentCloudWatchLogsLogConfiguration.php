<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupArn
 */
class ExperimentCloudWatchLogsLogConfiguration extends Shape
{
    /**
     * @param array{logGroupArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
