<?php

namespace Sunaoka\Aws\Structures\Efs\ModifyMountTargetSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MountTargetId
 * @property list<string> $SecurityGroups
 */
class ModifyMountTargetSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     MountTargetId: string,
     *     SecurityGroups?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
