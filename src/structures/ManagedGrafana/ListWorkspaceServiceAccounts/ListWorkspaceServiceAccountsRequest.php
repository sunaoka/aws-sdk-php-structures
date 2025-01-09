<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $workspaceId
 */
class ListWorkspaceServiceAccountsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
