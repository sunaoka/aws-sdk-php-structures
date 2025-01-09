<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RandomSplitEntry> $Branches
 */
class RandomSplitActivity extends Shape
{
    /**
     * @param array{Branches?: list<RandomSplitEntry>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
