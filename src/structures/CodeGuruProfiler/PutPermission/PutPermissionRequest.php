<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\PutPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'agentPermissions' $actionGroup
 * @property list<string> $principals
 * @property string $profilingGroupName
 * @property string|null $revisionId
 */
class PutPermissionRequest extends Request
{
    /**
     * @param array{
     *     actionGroup: 'agentPermissions',
     *     principals: list<string>,
     *     profilingGroupName: string,
     *     revisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
