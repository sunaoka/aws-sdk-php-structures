<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyName
 * @property string $keyRole
 * @property int $secondsToLive
 * @property string $workspaceId
 */
class CreateWorkspaceApiKeyRequest extends Request
{
    /**
     * @param array{
     *     keyName: string,
     *     keyRole: string,
     *     secondsToLive: int,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
