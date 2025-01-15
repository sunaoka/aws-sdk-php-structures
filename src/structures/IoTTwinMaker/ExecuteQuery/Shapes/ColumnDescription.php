<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ExecuteQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'NODE'|'EDGE'|'VALUE'|null $type
 */
class ColumnDescription extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: 'NODE'|'EDGE'|'VALUE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
