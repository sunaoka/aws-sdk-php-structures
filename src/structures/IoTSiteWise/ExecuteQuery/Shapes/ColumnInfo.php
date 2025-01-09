<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ColumnType $type
 */
class ColumnInfo extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     type?: ColumnType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
