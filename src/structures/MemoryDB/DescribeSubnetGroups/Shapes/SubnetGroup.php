<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeSubnetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $VpcId
 * @property list<Subnet> $Subnets
 * @property string $ARN
 */
class SubnetGroup extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     VpcId?: string,
     *     Subnets?: list<Subnet>,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
