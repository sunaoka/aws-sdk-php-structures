<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListRepositorySyncDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RepositoryLinkId
 * @property 'CFN_STACK_SYNC' $SyncType
 */
class ListRepositorySyncDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     RepositoryLinkId: string,
     *     SyncType: 'CFN_STACK_SYNC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
