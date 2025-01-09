<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ExecuteQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'NODE'|'EDGE'|'VALUE' $type
 */
class ColumnDescription extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     type?: 'NODE'|'EDGE'|'VALUE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
