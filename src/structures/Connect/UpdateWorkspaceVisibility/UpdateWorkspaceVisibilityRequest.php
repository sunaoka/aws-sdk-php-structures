<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspaceVisibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 * @property 'ALL'|'ASSIGNED'|'NONE' $Visibility
 */
class UpdateWorkspaceVisibilityRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string,
     *     Visibility: 'ALL'|'ASSIGNED'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
