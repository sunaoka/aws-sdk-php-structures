<?php

namespace Sunaoka\Aws\Structures\Honeycode\QueryTableRows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $formula
 * @property 'AUTO'|'NUMBER'|'CURRENCY'|'DATE'|'TIME'|'DATE_TIME'|'PERCENTAGE'|'TEXT'|'ACCOUNTING'|'CONTACT'|'ROWLINK'|'ROWSET'|null $format
 * @property string|null $rawValue
 * @property string|null $formattedValue
 * @property list<string>|null $formattedValues
 */
class Cell extends Shape
{
    /**
     * @param array{
     *     formula?: string|null,
     *     format?: 'AUTO'|'NUMBER'|'CURRENCY'|'DATE'|'TIME'|'DATE_TIME'|'PERCENTAGE'|'TEXT'|'ACCOUNTING'|'CONTACT'|'ROWLINK'|'ROWSET'|null,
     *     rawValue?: string|null,
     *     formattedValue?: string|null,
     *     formattedValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
