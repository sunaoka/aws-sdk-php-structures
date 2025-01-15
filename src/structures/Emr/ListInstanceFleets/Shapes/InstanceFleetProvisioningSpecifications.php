<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpotProvisioningSpecification|null $SpotSpecification
 * @property OnDemandProvisioningSpecification|null $OnDemandSpecification
 */
class InstanceFleetProvisioningSpecifications extends Shape
{
    /**
     * @param array{
     *     SpotSpecification?: SpotProvisioningSpecification|null,
     *     OnDemandSpecification?: OnDemandProvisioningSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
