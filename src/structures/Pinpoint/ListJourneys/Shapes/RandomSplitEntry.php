<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextActivity
 * @property int|null $Percentage
 */
class RandomSplitEntry extends Shape
{
    /**
     * @param array{
     *     NextActivity?: string|null,
     *     Percentage?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
