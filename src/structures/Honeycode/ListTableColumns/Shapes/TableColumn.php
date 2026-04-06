<?php

namespace Sunaoka\Aws\Structures\Honeycode\ListTableColumns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tableColumnId
 * @property string|null $tableColumnName
 * @property 'AUTO'|'NUMBER'|'CURRENCY'|'DATE'|'TIME'|'DATE_TIME'|'PERCENTAGE'|'TEXT'|'ACCOUNTING'|'CONTACT'|'ROWLINK'|'ROWSET'|null $format
 */
class TableColumn extends Shape
{
    /**
     * @param array{
     *     tableColumnId?: string|null,
     *     tableColumnName?: string|null,
     *     format?: 'AUTO'|'NUMBER'|'CURRENCY'|'DATE'|'TIME'|'DATE_TIME'|'PERCENTAGE'|'TEXT'|'ACCOUNTING'|'CONTACT'|'ROWLINK'|'ROWSET'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
