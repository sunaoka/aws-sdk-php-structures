<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainingDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnSchema> $schema
 * @property DataSource $dataSource
 */
class DatasetInputConfig extends Shape
{
    /**
     * @param array{
     *     schema: list<ColumnSchema>,
     *     dataSource: DataSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
