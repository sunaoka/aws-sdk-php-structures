<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceServiceAccountToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int $secondsToLive
 * @property string $serviceAccountId
 * @property string $workspaceId
 */
class CreateWorkspaceServiceAccountTokenRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     secondsToLive: int,
     *     serviceAccountId: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
