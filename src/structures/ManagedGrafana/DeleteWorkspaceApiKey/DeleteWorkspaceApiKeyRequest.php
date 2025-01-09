<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DeleteWorkspaceApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyName
 * @property string $workspaceId
 */
class DeleteWorkspaceApiKeyRequest extends Request
{
    /**
     * @param array{
     *     keyName: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
