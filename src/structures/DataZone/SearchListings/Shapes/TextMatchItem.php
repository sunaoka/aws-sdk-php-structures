<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $attribute
 * @property string|null $text
 * @property list<MatchOffset>|null $matchOffsets
 */
class TextMatchItem extends Shape
{
    /**
     * @param array{
     *     attribute?: string|null,
     *     text?: string|null,
     *     matchOffsets?: list<MatchOffset>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
