<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VERY_HIGH'|'HIGH'|'MEDIUM'|'LOW'|'NOT_AVAILABLE'|null $scoreConfidence
 */
class ScoreAttributes extends Shape
{
    /**
     * @param array{scoreConfidence?: 'VERY_HIGH'|'HIGH'|'MEDIUM'|'LOW'|'NOT_AVAILABLE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
