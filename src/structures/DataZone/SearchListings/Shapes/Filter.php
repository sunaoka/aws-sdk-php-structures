<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attribute
 * @property string|null $value
 * @property int|null $intValue
 * @property 'EQ'|'LE'|'LT'|'GE'|'GT'|'TEXT_SEARCH'|null $operator
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     attribute: string,
     *     value?: string|null,
     *     intValue?: int|null,
     *     operator?: 'EQ'|'LE'|'LT'|'GE'|'GT'|'TEXT_SEARCH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
