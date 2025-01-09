<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GB' $unit
 * @property double $value
 */
class TrainedModelInferenceMaxOutputSize extends Shape
{
    /**
     * @param array{
     *     unit: 'GB',
     *     value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
