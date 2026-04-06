<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\AssociateWorkspaceApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceId
 * @property string $ApplicationId
 */
class AssociateWorkspaceApplicationRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceId: string,
     *     ApplicationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
