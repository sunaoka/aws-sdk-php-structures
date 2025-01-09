<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceServiceAccountToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int<1, 2592000> $secondsToLive
 * @property string $serviceAccountId
 * @property string $workspaceId
 */
class CreateWorkspaceServiceAccountTokenRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     secondsToLive: int<1, 2592000>,
     *     serviceAccountId: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
