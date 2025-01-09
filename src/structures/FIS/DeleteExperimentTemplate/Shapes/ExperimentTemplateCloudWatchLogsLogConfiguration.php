<?php

namespace Sunaoka\Aws\Structures\FIS\DeleteExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupArn
 */
class ExperimentTemplateCloudWatchLogsLogConfiguration extends Shape
{
    /**
     * @param array{logGroupArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
