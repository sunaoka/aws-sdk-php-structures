<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DeleteWorkspaceServiceAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceAccountId
 * @property string $workspaceId
 */
class DeleteWorkspaceServiceAccountRequest extends Request
{
    /**
     * @param array{
     *     serviceAccountId: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
