<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TestSetSortBy|null $sortBy
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListTestSetsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: Shapes\TestSetSortBy|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
