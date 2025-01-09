<?php

namespace Sunaoka\Aws\Structures\DAX\CreateSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetGroupName
 * @property string $Description
 * @property string $VpcId
 * @property list<Subnet> $Subnets
 */
class SubnetGroup extends Shape
{
    /**
     * @param array{
     *     SubnetGroupName?: string,
     *     Description?: string,
     *     VpcId?: string,
     *     Subnets?: list<Subnet>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
