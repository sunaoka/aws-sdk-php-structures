<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GB' $unit
 * @property double $value
 */
class TrainedModelArtifactMaxSize extends Shape
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
