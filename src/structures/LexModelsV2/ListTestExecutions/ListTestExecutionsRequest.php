<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TestExecutionSortBy|null $sortBy
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListTestExecutionsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: Shapes\TestExecutionSortBy|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
