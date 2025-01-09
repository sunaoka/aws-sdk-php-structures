<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueTableReference $glue
 * @property SnowflakeTableReference $snowflake
 * @property AthenaTableReference $athena
 */
class TableReference extends Shape
{
    /**
     * @param array{
     *     glue?: GlueTableReference,
     *     snowflake?: SnowflakeTableReference,
     *     athena?: AthenaTableReference
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
