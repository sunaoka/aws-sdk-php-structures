<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ValueHint
 */
class AutoParameter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ValueHint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
