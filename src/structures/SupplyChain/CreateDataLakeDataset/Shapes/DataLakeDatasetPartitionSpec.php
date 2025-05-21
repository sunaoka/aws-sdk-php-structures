<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataLakeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataLakeDatasetPartitionField> $fields
 */
class DataLakeDatasetPartitionSpec extends Shape
{
    /**
     * @param array{fields: list<DataLakeDatasetPartitionField>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
