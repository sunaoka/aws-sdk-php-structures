<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainingDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $columnName
 * @property list<'USER_ID'|'ITEM_ID'|'TIMESTAMP'|'CATEGORICAL_FEATURE'|'NUMERICAL_FEATURE'> $columnTypes
 */
class ColumnSchema extends Shape
{
    /**
     * @param array{
     *     columnName: string,
     *     columnTypes: list<'USER_ID'|'ITEM_ID'|'TIMESTAMP'|'CATEGORICAL_FEATURE'|'NUMERICAL_FEATURE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
