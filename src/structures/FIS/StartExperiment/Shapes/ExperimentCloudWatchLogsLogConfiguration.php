<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupArn
 */
class ExperimentCloudWatchLogsLogConfiguration extends Shape
{
    /**
     * @param array{logGroupArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
