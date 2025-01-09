<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Domain'|'Framework'|'Task'|'FrameworkVersion' $Name
 * @property string $Value
 */
class ModelMetadataFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'Domain'|'Framework'|'Task'|'FrameworkVersion',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
