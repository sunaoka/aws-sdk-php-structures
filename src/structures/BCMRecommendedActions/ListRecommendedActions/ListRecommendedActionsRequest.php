<?php

namespace Sunaoka\Aws\Structures\BCMRecommendedActions\ListRecommendedActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RequestFilter|null $filter
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListRecommendedActionsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\RequestFilter|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
