<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DbSecurityGroupArn
 * @property string $DbSecurityGroupDescription
 * @property string $DbSecurityGroupName
 * @property list<AwsRdsDbSecurityGroupEc2SecurityGroup> $Ec2SecurityGroups
 * @property list<AwsRdsDbSecurityGroupIpRange> $IpRanges
 * @property string $OwnerId
 * @property string $VpcId
 */
class AwsRdsDbSecurityGroupDetails extends Shape
{
    /**
     * @param array{
     *     DbSecurityGroupArn?: string,
     *     DbSecurityGroupDescription?: string,
     *     DbSecurityGroupName?: string,
     *     Ec2SecurityGroups?: list<AwsRdsDbSecurityGroupEc2SecurityGroup>,
     *     IpRanges?: list<AwsRdsDbSecurityGroupIpRange>,
     *     OwnerId?: string,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
