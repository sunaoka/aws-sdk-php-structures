<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TransformationFunction $transformationFunction
 * @property 'POST_CHUNKING' $stepToApply
 */
class Transformation extends Shape
{
    /**
     * @param array{
     *     transformationFunction: TransformationFunction,
     *     stepToApply: 'POST_CHUNKING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
