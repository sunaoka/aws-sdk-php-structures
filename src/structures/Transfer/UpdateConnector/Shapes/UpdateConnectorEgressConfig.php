<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateConnectorVpcLatticeEgressConfig|null $VpcLattice
 */
class UpdateConnectorEgressConfig extends Shape
{
    /**
     * @param array{VpcLattice?: UpdateConnectorVpcLatticeEgressConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
