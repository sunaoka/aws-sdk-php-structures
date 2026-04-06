<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteWorkspacePage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 * @property string $Page
 */
class DeleteWorkspacePageRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string,
     *     Page: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
