<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RandomSplitEntry>|null $Branches
 */
class RandomSplitActivity extends Shape
{
    /**
     * @param array{Branches?: list<RandomSplitEntry>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
