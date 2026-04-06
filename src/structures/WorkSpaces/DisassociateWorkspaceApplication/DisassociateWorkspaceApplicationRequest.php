<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DisassociateWorkspaceApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceId
 * @property string $ApplicationId
 */
class DisassociateWorkspaceApplicationRequest extends Request
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
