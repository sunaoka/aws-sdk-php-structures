<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentAttributeKey
 * @property 'STRING_VALUE'|'STRING_LIST_VALUE'|'LONG_VALUE'|'DATE_VALUE' $DocumentAttributeValueType
 * @property list<DocumentAttributeValueCountPair> $DocumentAttributeValueCountPairs
 */
class FacetResult extends Shape
{
    /**
     * @param array{
     *     DocumentAttributeKey?: string,
     *     DocumentAttributeValueType?: 'STRING_VALUE'|'STRING_LIST_VALUE'|'LONG_VALUE'|'DATE_VALUE',
     *     DocumentAttributeValueCountPairs?: list<DocumentAttributeValueCountPair>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
