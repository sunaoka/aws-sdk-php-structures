<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModelInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $maxPayloadInMB
 */
class InferenceContainerExecutionParameters extends Shape
{
    /**
     * @param array{maxPayloadInMB?: int<1, 100>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
