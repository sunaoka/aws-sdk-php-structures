<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $startOffset
 * @property int|null $endOffset
 */
class MatchOffset extends Shape
{
    /**
     * @param array{
     *     startOffset?: int|null,
     *     endOffset?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
