<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property ColumnType|null $type
 */
class ColumnInfo extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: ColumnType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
