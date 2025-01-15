<?php

namespace Sunaoka\Aws\Structures\mgn\ListSourceServerActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property Shapes\SourceServerActionsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $sourceServerID
 */
class ListSourceServerActionsRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     filters?: Shapes\SourceServerActionsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
