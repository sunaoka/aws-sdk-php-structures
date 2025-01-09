<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VERY_HIGH'|'HIGH'|'MEDIUM'|'LOW'|'NOT_AVAILABLE' $scoreConfidence
 */
class ScoreAttributes extends Shape
{
    /**
     * @param array{scoreConfidence?: 'VERY_HIGH'|'HIGH'|'MEDIUM'|'LOW'|'NOT_AVAILABLE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
