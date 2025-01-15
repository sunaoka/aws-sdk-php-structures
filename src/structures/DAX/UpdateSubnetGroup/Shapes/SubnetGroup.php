<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetGroupName
 * @property string|null $Description
 * @property string|null $VpcId
 * @property list<Subnet>|null $Subnets
 */
class SubnetGroup extends Shape
{
    /**
     * @param array{
     *     SubnetGroupName?: string|null,
     *     Description?: string|null,
     *     VpcId?: string|null,
     *     Subnets?: list<Subnet>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
