<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIGH'|'MEDIUM'|'LOW' $relevanceLevel
 * @property double $relevanceScore
 */
class RankingData extends Shape
{
    /**
     * @param array{
     *     relevanceLevel?: 'HIGH'|'MEDIUM'|'LOW',
     *     relevanceScore?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
