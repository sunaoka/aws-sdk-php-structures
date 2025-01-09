<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBSubnetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBSubnetGroupName
 * @property string $DBSubnetGroupDescription
 * @property string $VpcId
 * @property string $SubnetGroupStatus
 * @property list<Subnet> $Subnets
 * @property string $DBSubnetGroupArn
 */
class DBSubnetGroup extends Shape
{
    /**
     * @param array{
     *     DBSubnetGroupName?: string,
     *     DBSubnetGroupDescription?: string,
     *     VpcId?: string,
     *     SubnetGroupStatus?: string,
     *     Subnets?: list<Subnet>,
     *     DBSubnetGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
