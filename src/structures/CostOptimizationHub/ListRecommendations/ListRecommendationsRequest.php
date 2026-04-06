<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Filter|null $filter
 * @property Shapes\OrderBy|null $orderBy
 * @property bool|null $includeAllRecommendations
 * @property int<0, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\Filter|null,
     *     orderBy?: Shapes\OrderBy|null,
     *     includeAllRecommendations?: bool|null,
     *     maxResults?: int<0, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
