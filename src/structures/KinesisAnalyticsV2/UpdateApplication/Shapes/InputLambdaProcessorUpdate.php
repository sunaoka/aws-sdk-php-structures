<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceARNUpdate
 */
class InputLambdaProcessorUpdate extends Shape
{
    /**
     * @param array{ResourceARNUpdate: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
