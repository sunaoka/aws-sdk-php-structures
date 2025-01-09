<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DbSubnetGroupName
 * @property string $DbSubnetGroupDescription
 * @property string $VpcId
 * @property string $SubnetGroupStatus
 * @property list<AwsRdsDbSubnetGroupSubnet> $Subnets
 * @property string $DbSubnetGroupArn
 */
class AwsRdsDbSubnetGroup extends Shape
{
    /**
     * @param array{
     *     DbSubnetGroupName?: string,
     *     DbSubnetGroupDescription?: string,
     *     VpcId?: string,
     *     SubnetGroupStatus?: string,
     *     Subnets?: list<AwsRdsDbSubnetGroupSubnet>,
     *     DbSubnetGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
