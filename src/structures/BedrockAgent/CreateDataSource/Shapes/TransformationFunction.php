<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TransformationLambdaConfiguration $transformationLambdaConfiguration
 */
class TransformationFunction extends Shape
{
    /**
     * @param array{transformationLambdaConfiguration: TransformationLambdaConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
