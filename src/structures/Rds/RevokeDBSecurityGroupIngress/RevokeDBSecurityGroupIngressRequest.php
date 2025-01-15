<?php

namespace Sunaoka\Aws\Structures\Rds\RevokeDBSecurityGroupIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSecurityGroupName
 * @property string|null $CIDRIP
 * @property string|null $EC2SecurityGroupName
 * @property string|null $EC2SecurityGroupId
 * @property string|null $EC2SecurityGroupOwnerId
 */
class RevokeDBSecurityGroupIngressRequest extends Request
{
    /**
     * @param array{
     *     DBSecurityGroupName: string,
     *     CIDRIP?: string|null,
     *     EC2SecurityGroupName?: string|null,
     *     EC2SecurityGroupId?: string|null,
     *     EC2SecurityGroupOwnerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
