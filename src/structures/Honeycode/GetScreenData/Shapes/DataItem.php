<?php

namespace Sunaoka\Aws\Structures\Honeycode\GetScreenData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'NUMBER'|'CURRENCY'|'DATE'|'TIME'|'DATE_TIME'|'PERCENTAGE'|'TEXT'|'ACCOUNTING'|'CONTACT'|'ROWLINK'|'ROWSET'|null $overrideFormat
 * @property string|null $rawValue
 * @property string|null $formattedValue
 */
class DataItem extends Shape
{
    /**
     * @param array{
     *     overrideFormat?: 'AUTO'|'NUMBER'|'CURRENCY'|'DATE'|'TIME'|'DATE_TIME'|'PERCENTAGE'|'TEXT'|'ACCOUNTING'|'CONTACT'|'ROWLINK'|'ROWSET'|null,
     *     rawValue?: string|null,
     *     formattedValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
