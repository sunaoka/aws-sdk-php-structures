<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpotResizingSpecification $SpotResizeSpecification
 * @property OnDemandResizingSpecification $OnDemandResizeSpecification
 */
class InstanceFleetResizingSpecifications extends Shape
{
    /**
     * @param array{
     *     SpotResizeSpecification?: SpotResizingSpecification,
     *     OnDemandResizeSpecification?: OnDemandResizingSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
