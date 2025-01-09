<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\AcceptResourceGroupingRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property list<Shapes\AcceptGroupingRecommendationEntry> $entries
 */
class AcceptResourceGroupingRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     entries: list<Shapes\AcceptGroupingRecommendationEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
