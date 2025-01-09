<?php

namespace Sunaoka\Aws\Structures\kendra\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VERY_HIGH'|'HIGH'|'MEDIUM'|'LOW'|'NOT_AVAILABLE' $ScoreConfidence
 */
class ScoreAttributes extends Shape
{
    /**
     * @param array{ScoreConfidence?: 'VERY_HIGH'|'HIGH'|'MEDIUM'|'LOW'|'NOT_AVAILABLE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
