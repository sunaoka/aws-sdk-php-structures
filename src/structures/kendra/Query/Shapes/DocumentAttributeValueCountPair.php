<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAttributeValue $DocumentAttributeValue
 * @property int $Count
 * @property list<FacetResult> $FacetResults
 */
class DocumentAttributeValueCountPair extends Shape
{
    /**
     * @param array{
     *     DocumentAttributeValue?: DocumentAttributeValue,
     *     Count?: int,
     *     FacetResults?: list<FacetResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
