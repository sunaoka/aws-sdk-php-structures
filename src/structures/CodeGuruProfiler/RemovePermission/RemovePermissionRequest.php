<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\RemovePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'agentPermissions' $actionGroup
 * @property string $profilingGroupName
 * @property string $revisionId
 */
class RemovePermissionRequest extends Request
{
    /**
     * @param array{
     *     actionGroup: 'agentPermissions',
     *     profilingGroupName: string,
     *     revisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
