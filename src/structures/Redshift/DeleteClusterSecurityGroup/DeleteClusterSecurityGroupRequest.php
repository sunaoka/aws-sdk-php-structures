<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteClusterSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSecurityGroupName
 */
class DeleteClusterSecurityGroupRequest extends Request
{
    /**
     * @param array{ClusterSecurityGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
