<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TestSetSortBy $sortBy
 * @property int $maxResults
 * @property string $nextToken
 */
class ListTestSetsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: Shapes\TestSetSortBy,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
