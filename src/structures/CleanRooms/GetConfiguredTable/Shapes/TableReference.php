<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueTableReference|null $glue
 * @property SnowflakeTableReference|null $snowflake
 * @property AthenaTableReference|null $athena
 */
class TableReference extends Shape
{
    /**
     * @param array{
     *     glue?: GlueTableReference|null,
     *     snowflake?: SnowflakeTableReference|null,
     *     athena?: AthenaTableReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
