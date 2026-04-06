<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $relevanceScore
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $relevanceLevel
 */
class RankingData extends Shape
{
    /**
     * @param array{
     *     relevanceScore?: double|null,
     *     relevanceLevel?: 'HIGH'|'MEDIUM'|'LOW'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
