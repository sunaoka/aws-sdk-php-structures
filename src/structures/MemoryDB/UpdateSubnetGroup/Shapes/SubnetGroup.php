<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $VpcId
 * @property list<Subnet>|null $Subnets
 * @property string|null $ARN
 */
class SubnetGroup extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     VpcId?: string|null,
     *     Subnets?: list<Subnet>|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
