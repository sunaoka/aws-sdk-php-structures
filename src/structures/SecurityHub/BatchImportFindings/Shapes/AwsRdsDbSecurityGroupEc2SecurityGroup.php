<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ec2SecurityGroupId
 * @property string $Ec2SecurityGroupName
 * @property string $Ec2SecurityGroupOwnerId
 * @property string $Status
 */
class AwsRdsDbSecurityGroupEc2SecurityGroup extends Shape
{
    /**
     * @param array{
     *     Ec2SecurityGroupId?: string,
     *     Ec2SecurityGroupName?: string,
     *     Ec2SecurityGroupOwnerId?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
