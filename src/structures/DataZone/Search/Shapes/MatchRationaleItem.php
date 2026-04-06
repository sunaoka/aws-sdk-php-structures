<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TextMatchItem>|null $textMatches
 */
class MatchRationaleItem extends Shape
{
    /**
     * @param array{textMatches?: list<TextMatchItem>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
