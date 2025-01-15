<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Low'|'Medium'|'High'|null $description
 * @property int|null $score
 */
class Severity extends Shape
{
    /**
     * @param array{
     *     description?: 'Low'|'Medium'|'High'|null,
     *     score?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
