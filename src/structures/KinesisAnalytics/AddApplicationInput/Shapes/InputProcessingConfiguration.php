<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLambdaProcessor $InputLambdaProcessor
 */
class InputProcessingConfiguration extends Shape
{
    /**
     * @param array{InputLambdaProcessor: InputLambdaProcessor} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
