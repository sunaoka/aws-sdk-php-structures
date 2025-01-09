<?php

namespace Sunaoka\Aws\Structures\ElastiCache\AuthorizeCacheSecurityGroupIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheSecurityGroupName
 * @property string $EC2SecurityGroupName
 * @property string $EC2SecurityGroupOwnerId
 */
class AuthorizeCacheSecurityGroupIngressRequest extends Request
{
    /**
     * @param array{
     *     CacheSecurityGroupName: string,
     *     EC2SecurityGroupName: string,
     *     EC2SecurityGroupOwnerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
