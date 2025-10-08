<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UltraServerId
 * @property int<0, max> $InstanceCount
 */
class PlacementSpecification extends Shape
{
    /**
     * @param array{
     *     UltraServerId?: string|null,
     *     InstanceCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
