<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $attribute
 * @property list<MatchOffset>|null $matchOffsets
 * @property string|null $text
 */
class TextMatchItem extends Shape
{
    /**
     * @param array{
     *     attribute?: string|null,
     *     matchOffsets?: list<MatchOffset>|null,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
