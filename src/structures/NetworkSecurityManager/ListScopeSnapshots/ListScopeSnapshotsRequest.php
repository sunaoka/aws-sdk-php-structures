<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListScopeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListScopeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     scopeIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
