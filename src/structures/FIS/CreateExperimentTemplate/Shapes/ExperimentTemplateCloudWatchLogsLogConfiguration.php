<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupArn
 */
class ExperimentTemplateCloudWatchLogsLogConfiguration extends Shape
{
    /**
     * @param array{logGroupArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
