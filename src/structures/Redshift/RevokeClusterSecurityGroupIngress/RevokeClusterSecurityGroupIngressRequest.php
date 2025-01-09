<?php

namespace Sunaoka\Aws\Structures\Redshift\RevokeClusterSecurityGroupIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSecurityGroupName
 * @property string $CIDRIP
 * @property string $EC2SecurityGroupName
 * @property string $EC2SecurityGroupOwnerId
 */
class RevokeClusterSecurityGroupIngressRequest extends Request
{
    /**
     * @param array{
     *     ClusterSecurityGroupName: string,
     *     CIDRIP?: string,
     *     EC2SecurityGroupName?: string,
     *     EC2SecurityGroupOwnerId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
