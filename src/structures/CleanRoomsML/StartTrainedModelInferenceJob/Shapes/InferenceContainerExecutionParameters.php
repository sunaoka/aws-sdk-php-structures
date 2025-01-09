<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartTrainedModelInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxPayloadInMB
 */
class InferenceContainerExecutionParameters extends Shape
{
    /**
     * @param array{maxPayloadInMB?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
