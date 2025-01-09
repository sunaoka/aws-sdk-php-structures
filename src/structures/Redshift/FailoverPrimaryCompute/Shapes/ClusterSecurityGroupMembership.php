<?php

namespace Sunaoka\Aws\Structures\Redshift\FailoverPrimaryCompute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterSecurityGroupName
 * @property string $Status
 */
class ClusterSecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     ClusterSecurityGroupName?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
