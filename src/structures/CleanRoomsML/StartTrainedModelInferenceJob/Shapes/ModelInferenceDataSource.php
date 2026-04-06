<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartTrainedModelInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mlInputChannelArn
 */
class ModelInferenceDataSource extends Shape
{
    /**
     * @param array{mlInputChannelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
