<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Filter $filter
 * @property Shapes\OrderBy $orderBy
 * @property bool $includeAllRecommendations
 * @property int $maxResults
 * @property string $nextToken
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\Filter,
     *     orderBy?: Shapes\OrderBy,
     *     includeAllRecommendations?: bool,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
