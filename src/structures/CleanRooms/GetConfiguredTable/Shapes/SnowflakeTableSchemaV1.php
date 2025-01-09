<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $columnName
 * @property string $columnType
 */
class SnowflakeTableSchemaV1 extends Shape
{
    /**
     * @param array{
     *     columnName: string,
     *     columnType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
