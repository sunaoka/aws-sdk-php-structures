<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataLakeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<DataLakeDatasetSchemaField> $fields
 */
class DataLakeDatasetSchema extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     fields: list<DataLakeDatasetSchemaField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
