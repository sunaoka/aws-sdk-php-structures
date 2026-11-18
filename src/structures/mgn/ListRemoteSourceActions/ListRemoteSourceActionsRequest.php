<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListRemoteSourceActionsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $accountID
 */
class ListRemoteSourceActionsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListRemoteSourceActionsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
