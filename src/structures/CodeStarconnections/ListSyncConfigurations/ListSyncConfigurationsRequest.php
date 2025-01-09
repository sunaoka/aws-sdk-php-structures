<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\ListSyncConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $MaxResults
 * @property string $NextToken
 * @property string $RepositoryLinkId
 * @property 'CFN_STACK_SYNC' $SyncType
 */
class ListSyncConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 100>,
     *     NextToken?: string,
     *     RepositoryLinkId: string,
     *     SyncType: 'CFN_STACK_SYNC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
