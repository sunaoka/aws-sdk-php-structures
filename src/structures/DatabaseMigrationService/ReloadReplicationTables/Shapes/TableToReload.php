<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ReloadReplicationTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaName
 * @property string $TableName
 */
class TableToReload extends Shape
{
    /**
     * @param array{
     *     SchemaName: string,
     *     TableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
