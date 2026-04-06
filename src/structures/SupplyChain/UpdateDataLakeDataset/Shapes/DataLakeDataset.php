<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataLakeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string $namespace
 * @property string $name
 * @property string $arn
 * @property DataLakeDatasetSchema $schema
 * @property string|null $description
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
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
