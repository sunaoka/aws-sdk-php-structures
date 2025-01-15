<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property SnowflakeNodeData $Data
 * @property list<GlueSchema>|null $OutputSchemas
 */
class SnowflakeSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Data: SnowflakeNodeData,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
