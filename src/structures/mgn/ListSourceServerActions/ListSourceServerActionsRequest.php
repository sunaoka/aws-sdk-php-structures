<?php

namespace Sunaoka\Aws\Structures\mgn\ListSourceServerActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property Shapes\SourceServerActionsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $accountID
 */
class ListSourceServerActionsRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     filters?: Shapes\SourceServerActionsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
