<?php

namespace Sunaoka\Aws\Structures\mgn\ListSourceServerActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property Shapes\SourceServerActionsRequestFilters $filters
 * @property int $maxResults
 * @property string $nextToken
 * @property string $sourceServerID
 */
class ListSourceServerActionsRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     filters?: Shapes\SourceServerActionsRequestFilters,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
