<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableName
 * @property string $databaseName
 */
class GlueTableReference extends Shape
{
    /**
     * @param array{
     *     tableName: string,
     *     databaseName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
