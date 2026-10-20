<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $schemaName
 * @property string $tableName
 * @property string $workspaceUrl
 * @property DatabricksConnectionType $connectionType
 */
class DatabricksTableReference extends Shape
{
    /**
     * @param array{
     *     schemaName: string,
     *     tableName: string,
     *     workspaceUrl: string,
     *     connectionType: DatabricksConnectionType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
