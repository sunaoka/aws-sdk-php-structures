<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectorVpcLatticeEgressConfig|null $VpcLattice
 */
class ConnectorEgressConfig extends Shape
{
    /**
     * @param array{VpcLattice?: ConnectorVpcLatticeEgressConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
