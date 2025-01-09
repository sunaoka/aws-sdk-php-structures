<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeMountTargetSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MountTargetId
 */
class DescribeMountTargetSecurityGroupsRequest extends Request
{
    /**
     * @param array{MountTargetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
