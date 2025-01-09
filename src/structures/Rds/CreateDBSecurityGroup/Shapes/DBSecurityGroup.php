<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $DBSecurityGroupName
 * @property string $DBSecurityGroupDescription
 * @property string $VpcId
 * @property list<EC2SecurityGroup> $EC2SecurityGroups
 * @property list<IPRange> $IPRanges
 * @property string $DBSecurityGroupArn
 */
class DBSecurityGroup extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     DBSecurityGroupName?: string,
     *     DBSecurityGroupDescription?: string,
     *     VpcId?: string,
     *     EC2SecurityGroups?: list<EC2SecurityGroup>,
     *     IPRanges?: list<IPRange>,
     *     DBSecurityGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
