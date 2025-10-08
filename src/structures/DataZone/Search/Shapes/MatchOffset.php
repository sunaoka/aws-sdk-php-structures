<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $endOffset
 * @property int|null $startOffset
 */
class MatchOffset extends Shape
{
    /**
     * @param array{
     *     endOffset?: int|null,
     *     startOffset?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
