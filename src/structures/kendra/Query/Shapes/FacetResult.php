<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentAttributeKey
 * @property 'STRING_VALUE'|'STRING_LIST_VALUE'|'LONG_VALUE'|'DATE_VALUE'|null $DocumentAttributeValueType
 * @property list<DocumentAttributeValueCountPair>|null $DocumentAttributeValueCountPairs
 */
class FacetResult extends Shape
{
    /**
     * @param array{
     *     DocumentAttributeKey?: string|null,
     *     DocumentAttributeValueType?: 'STRING_VALUE'|'STRING_LIST_VALUE'|'LONG_VALUE'|'DATE_VALUE'|null,
     *     DocumentAttributeValueCountPairs?: list<DocumentAttributeValueCountPair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
