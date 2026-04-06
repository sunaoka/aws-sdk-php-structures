<?php

namespace Sunaoka\Aws\Structures\Honeycode\GetScreenData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'AUTO'|'NUMBER'|'CURRENCY'|'DATE'|'TIME'|'DATE_TIME'|'PERCENTAGE'|'TEXT'|'ACCOUNTING'|'CONTACT'|'ROWLINK'|'ROWSET' $format
 */
class ColumnMetadata extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     format: 'AUTO'|'NUMBER'|'CURRENCY'|'DATE'|'TIME'|'DATE_TIME'|'PERCENTAGE'|'TEXT'|'ACCOUNTING'|'CONTACT'|'ROWLINK'|'ROWSET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
