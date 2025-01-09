<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteClusterSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSubnetGroupName
 */
class DeleteClusterSubnetGroupRequest extends Request
{
    /**
     * @param array{ClusterSubnetGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
