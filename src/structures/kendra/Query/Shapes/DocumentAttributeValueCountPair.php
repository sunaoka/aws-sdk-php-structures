<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAttributeValue|null $DocumentAttributeValue
 * @property int|null $Count
 * @property list<FacetResult>|null $FacetResults
 */
class DocumentAttributeValueCountPair extends Shape
{
    /**
     * @param array{
     *     DocumentAttributeValue?: DocumentAttributeValue|null,
     *     Count?: int|null,
     *     FacetResults?: list<FacetResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
