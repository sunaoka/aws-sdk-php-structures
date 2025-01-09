<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnowflakeTableSchemaV1> $v1
 */
class SnowflakeTableSchema extends Shape
{
    /**
     * @param array{v1?: list<SnowflakeTableSchemaV1>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
