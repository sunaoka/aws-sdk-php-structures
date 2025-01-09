<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccountTokens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $serviceAccountId
 * @property string $workspaceId
 */
class ListWorkspaceServiceAccountTokensRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     serviceAccountId: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
