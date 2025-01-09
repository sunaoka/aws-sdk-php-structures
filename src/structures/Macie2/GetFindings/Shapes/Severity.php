<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Low'|'Medium'|'High' $description
 * @property int $score
 */
class Severity extends Shape
{
    /**
     * @param array{
     *     description?: 'Low'|'Medium'|'High',
     *     score?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
