<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLambdaProcessorDescription $InputLambdaProcessorDescription
 */
class InputProcessingConfigurationDescription extends Shape
{
    /**
     * @param array{InputLambdaProcessorDescription?: InputLambdaProcessorDescription} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
