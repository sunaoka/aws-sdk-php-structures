<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntermediateStorage $intermediateStorage
 * @property list<Transformation> $transformations
 */
class CustomTransformationConfiguration extends Shape
{
    /**
     * @param array{
     *     intermediateStorage: IntermediateStorage,
     *     transformations: list<Transformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
