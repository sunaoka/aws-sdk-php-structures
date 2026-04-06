<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListRecommendedActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\RecommendedActionFilter>|null $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListRecommendedActionsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\RecommendedActionFilter>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
