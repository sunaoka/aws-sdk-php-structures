<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLambdaProcessorUpdate $InputLambdaProcessorUpdate
 */
class InputProcessingConfigurationUpdate extends Shape
{
    /**
     * @param array{InputLambdaProcessorUpdate: InputLambdaProcessorUpdate} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
