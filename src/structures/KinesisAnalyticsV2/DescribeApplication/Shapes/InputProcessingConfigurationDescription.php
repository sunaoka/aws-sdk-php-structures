<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLambdaProcessorDescription|null $InputLambdaProcessorDescription
 */
class InputProcessingConfigurationDescription extends Shape
{
    /**
     * @param array{InputLambdaProcessorDescription?: InputLambdaProcessorDescription|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
