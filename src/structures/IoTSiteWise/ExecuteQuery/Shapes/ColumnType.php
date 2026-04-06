<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BOOLEAN'|'INT'|'DOUBLE'|'TIMESTAMP'|'STRING'|null $scalarType
 */
class ColumnType extends Shape
{
    /**
     * @param array{scalarType?: 'BOOLEAN'|'INT'|'DOUBLE'|'TIMESTAMP'|'STRING'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
