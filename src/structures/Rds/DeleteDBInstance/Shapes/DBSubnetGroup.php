<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBSubnetGroupName
 * @property string $DBSubnetGroupDescription
 * @property string $VpcId
 * @property string $SubnetGroupStatus
 * @property list<Subnet> $Subnets
 * @property string $DBSubnetGroupArn
 * @property list<string> $SupportedNetworkTypes
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
     *     DBSubnetGroupArn?: string,
     *     SupportedNetworkTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
