<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeServiceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TrainingJobArn' $name
 * @property string $value
 */
class ServiceResourceId extends Shape
{
    /**
     * @param array{
     *     name: 'TrainingJobArn',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
