<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainingDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableName
 * @property string $databaseName
 * @property string $catalogId
 */
class GlueDataSource extends Shape
{
    /**
     * @param array{
     *     tableName: string,
     *     databaseName: string,
     *     catalogId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
