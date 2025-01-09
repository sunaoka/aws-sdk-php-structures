<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\RejectResourceGroupingRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property list<Shapes\RejectGroupingRecommendationEntry> $entries
 */
class RejectResourceGroupingRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     entries: list<Shapes\RejectGroupingRecommendationEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
