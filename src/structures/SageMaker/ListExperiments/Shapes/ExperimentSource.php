<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListExperiments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $SourceType
 */
class ExperimentSource extends Shape
{
    /**
     * @param array{
     *     SourceArn: string,
     *     SourceType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
