<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string|null $SourceType
 */
class ExperimentSource extends Shape
{
    /**
     * @param array{
     *     SourceArn: string,
     *     SourceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
