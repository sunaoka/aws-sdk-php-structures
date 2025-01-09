<?php

namespace Sunaoka\Aws\Structures\Rds\AuthorizeDBSecurityGroupIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSecurityGroupName
 * @property string $CIDRIP
 * @property string $EC2SecurityGroupName
 * @property string $EC2SecurityGroupId
 * @property string $EC2SecurityGroupOwnerId
 */
class AuthorizeDBSecurityGroupIngressRequest extends Request
{
    /**
     * @param array{
     *     DBSecurityGroupName: string,
     *     CIDRIP?: string,
     *     EC2SecurityGroupName?: string,
     *     EC2SecurityGroupId?: string,
     *     EC2SecurityGroupOwnerId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
