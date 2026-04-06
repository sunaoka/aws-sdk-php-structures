<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescribedConnectorVpcLatticeEgressConfig|null $VpcLattice
 */
class DescribedConnectorEgressConfig extends Shape
{
    /**
     * @param array{VpcLattice?: DescribedConnectorVpcLatticeEgressConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
