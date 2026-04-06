<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POST_CHUNKING' $stepToApply
 * @property TransformationFunction $transformationFunction
 */
class Transformation extends Shape
{
    /**
     * @param array{
     *     stepToApply: 'POST_CHUNKING',
     *     transformationFunction: TransformationFunction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
