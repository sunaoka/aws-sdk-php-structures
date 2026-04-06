<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataLakeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string $namespace
 * @property string $name
 * @property string $arn
 * @property DataLakeDatasetSchema $schema
 * @property string|null $description
 * @property DataLakeDatasetPartitionSpec|null $partitionSpec
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 */
class DataLakeDataset extends Shape
{
    /**
     * @param array{
     *     instanceId: string,
     *     namespace: string,
     *     name: string,
     *     arn: string,
     *     schema: DataLakeDatasetSchema,
     *     description?: string|null,
     *     partitionSpec?: DataLakeDatasetPartitionSpec|null,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
