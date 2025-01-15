<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ec2SecurityGroupId
 * @property string|null $Ec2SecurityGroupName
 * @property string|null $Ec2SecurityGroupOwnerId
 * @property string|null $Status
 */
class AwsRdsDbSecurityGroupEc2SecurityGroup extends Shape
{
    /**
     * @param array{
     *     Ec2SecurityGroupId?: string|null,
     *     Ec2SecurityGroupName?: string|null,
     *     Ec2SecurityGroupOwnerId?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
