<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeployWorkspaceApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceId
 * @property bool|null $Force
 */
class DeployWorkspaceApplicationsRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceId: string,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
