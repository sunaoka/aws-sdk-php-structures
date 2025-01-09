<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetRepositorySyncStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Branch
 * @property string $RepositoryLinkId
 * @property 'CFN_STACK_SYNC' $SyncType
 */
class GetRepositorySyncStatusRequest extends Request
{
    /**
     * @param array{
     *     Branch: string,
     *     RepositoryLinkId: string,
     *     SyncType: 'CFN_STACK_SYNC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
