<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBSubnetGroupName
 * @property string|null $DBSubnetGroupDescription
 * @property string|null $VpcId
 * @property string|null $SubnetGroupStatus
 * @property list<Subnet>|null $Subnets
 * @property string|null $DBSubnetGroupArn
 */
class DBSubnetGroup extends Shape
{
    /**
     * @param array{
     *     DBSubnetGroupName?: string|null,
     *     DBSubnetGroupDescription?: string|null,
     *     VpcId?: string|null,
     *     SubnetGroupStatus?: string|null,
     *     Subnets?: list<Subnet>|null,
     *     DBSubnetGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
