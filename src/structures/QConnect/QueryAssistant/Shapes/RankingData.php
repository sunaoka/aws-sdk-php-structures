<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $relevanceLevel
 * @property double|null $relevanceScore
 */
class RankingData extends Shape
{
    /**
     * @param array{
     *     relevanceLevel?: 'HIGH'|'MEDIUM'|'LOW'|null,
     *     relevanceScore?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
