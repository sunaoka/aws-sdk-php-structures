<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListSopRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $alreadyImplemented
 * @property 'AlreadyImplemented'|'NotRelevant'|'ComplexityOfImplementation'|null $excludeReason
 * @property bool|null $excluded
 * @property string|null $resourceId
 * @property string|null $targetAccountId
 * @property string|null $targetRegion
 */
class RecommendationItem extends Shape
{
    /**
     * @param array{
     *     alreadyImplemented?: bool|null,
     *     excludeReason?: 'AlreadyImplemented'|'NotRelevant'|'ComplexityOfImplementation'|null,
     *     excluded?: bool|null,
     *     resourceId?: string|null,
     *     targetAccountId?: string|null,
     *     targetRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
