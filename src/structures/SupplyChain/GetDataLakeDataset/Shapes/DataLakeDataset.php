<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataLakeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string $namespace
 * @property string $name
 * @property string $arn
 * @property DataLakeDatasetSchema $schema
 * @property string $description
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
     *     description?: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
