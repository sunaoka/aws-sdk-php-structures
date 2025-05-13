<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataLakeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<DataLakeDatasetSchemaField> $fields
 * @property list<DataLakeDatasetPrimaryKeyField>|null $primaryKeys
 */
class DataLakeDatasetSchema extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     fields: list<DataLakeDatasetSchemaField>,
     *     primaryKeys?: list<DataLakeDatasetPrimaryKeyField>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
