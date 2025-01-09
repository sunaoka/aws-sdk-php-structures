<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretArn
 * @property string $accountIdentifier
 * @property string $databaseName
 * @property string $tableName
 * @property string $schemaName
 * @property SnowflakeTableSchema $tableSchema
 */
class SnowflakeTableReference extends Shape
{
    /**
     * @param array{
     *     secretArn: string,
     *     accountIdentifier: string,
     *     databaseName: string,
     *     tableName: string,
     *     schemaName: string,
     *     tableSchema: SnowflakeTableSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
