<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DbSecurityGroupArn
 * @property string|null $DbSecurityGroupDescription
 * @property string|null $DbSecurityGroupName
 * @property list<AwsRdsDbSecurityGroupEc2SecurityGroup>|null $Ec2SecurityGroups
 * @property list<AwsRdsDbSecurityGroupIpRange>|null $IpRanges
 * @property string|null $OwnerId
 * @property string|null $VpcId
 */
class AwsRdsDbSecurityGroupDetails extends Shape
{
    /**
     * @param array{
     *     DbSecurityGroupArn?: string|null,
     *     DbSecurityGroupDescription?: string|null,
     *     DbSecurityGroupName?: string|null,
     *     Ec2SecurityGroups?: list<AwsRdsDbSecurityGroupEc2SecurityGroup>|null,
     *     IpRanges?: list<AwsRdsDbSecurityGroupIpRange>|null,
     *     OwnerId?: string|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
