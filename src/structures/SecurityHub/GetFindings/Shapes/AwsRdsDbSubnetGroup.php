<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DbSubnetGroupName
 * @property string|null $DbSubnetGroupDescription
 * @property string|null $VpcId
 * @property string|null $SubnetGroupStatus
 * @property list<AwsRdsDbSubnetGroupSubnet>|null $Subnets
 * @property string|null $DbSubnetGroupArn
 */
class AwsRdsDbSubnetGroup extends Shape
{
    /**
     * @param array{
     *     DbSubnetGroupName?: string|null,
     *     DbSubnetGroupDescription?: string|null,
     *     VpcId?: string|null,
     *     SubnetGroupStatus?: string|null,
     *     Subnets?: list<AwsRdsDbSubnetGroupSubnet>|null,
     *     DbSubnetGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
