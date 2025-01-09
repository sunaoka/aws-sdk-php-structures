<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpotProvisioningSpecification $SpotSpecification
 * @property OnDemandProvisioningSpecification $OnDemandSpecification
 */
class InstanceFleetProvisioningSpecifications extends Shape
{
    /**
     * @param array{
     *     SpotSpecification?: SpotProvisioningSpecification,
     *     OnDemandSpecification?: OnDemandProvisioningSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
