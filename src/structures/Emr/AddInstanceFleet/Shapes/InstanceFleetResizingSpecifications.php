<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpotResizingSpecification|null $SpotResizeSpecification
 * @property OnDemandResizingSpecification|null $OnDemandResizeSpecification
 */
class InstanceFleetResizingSpecifications extends Shape
{
    /**
     * @param array{
     *     SpotResizeSpecification?: SpotResizingSpecification|null,
     *     OnDemandResizeSpecification?: OnDemandResizingSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
