<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInputProcessingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceARN
 */
class InputLambdaProcessor extends Shape
{
    /**
     * @param array{ResourceARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
