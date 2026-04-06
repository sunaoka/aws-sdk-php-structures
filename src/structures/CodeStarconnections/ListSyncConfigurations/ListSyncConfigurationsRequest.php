<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\ListSyncConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $RepositoryLinkId
 * @property 'CFN_STACK_SYNC' $SyncType
 */
class ListSyncConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null,
     *     RepositoryLinkId: string,
     *     SyncType: 'CFN_STACK_SYNC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
