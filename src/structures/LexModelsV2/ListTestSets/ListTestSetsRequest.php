<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TestSetSortBy $sortBy
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListTestSetsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: Shapes\TestSetSortBy,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
