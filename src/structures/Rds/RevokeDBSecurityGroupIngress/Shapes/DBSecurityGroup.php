<?php

namespace Sunaoka\Aws\Structures\Rds\RevokeDBSecurityGroupIngress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $DBSecurityGroupName
 * @property string|null $DBSecurityGroupDescription
 * @property string|null $VpcId
 * @property list<EC2SecurityGroup>|null $EC2SecurityGroups
 * @property list<IPRange>|null $IPRanges
 * @property string|null $DBSecurityGroupArn
 */
class DBSecurityGroup extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     DBSecurityGroupName?: string|null,
     *     DBSecurityGroupDescription?: string|null,
     *     VpcId?: string|null,
     *     EC2SecurityGroups?: list<EC2SecurityGroup>|null,
     *     IPRanges?: list<IPRange>|null,
     *     DBSecurityGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
