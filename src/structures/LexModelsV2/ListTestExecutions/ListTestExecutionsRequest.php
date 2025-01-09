<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TestExecutionSortBy $sortBy
 * @property int $maxResults
 * @property string $nextToken
 */
class ListTestExecutionsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: Shapes\TestExecutionSortBy,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
