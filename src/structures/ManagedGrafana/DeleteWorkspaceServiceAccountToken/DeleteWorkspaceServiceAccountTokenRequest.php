<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DeleteWorkspaceServiceAccountToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceAccountId
 * @property string $tokenId
 * @property string $workspaceId
 */
class DeleteWorkspaceServiceAccountTokenRequest extends Request
{
    /**
     * @param array{
     *     serviceAccountId: string,
     *     tokenId: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
