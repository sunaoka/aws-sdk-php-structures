<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $catalogId
 * @property string $databaseName
 * @property string $tableName
 */
class GlueTableSource extends Shape
{
    /**
     * @param array{
     *     catalogId: string,
     *     databaseName: string,
     *     tableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
