<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataLakeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $namespace
 * @property string $name
 * @property Shapes\DataLakeDatasetSchema|null $schema
 * @property string|null $description
 * @property Shapes\DataLakeDatasetPartitionSpec|null $partitionSpec
 * @property array<string, string>|null $tags
 */
class CreateDataLakeDatasetRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     namespace: string,
     *     name: string,
     *     schema?: Shapes\DataLakeDatasetSchema|null,
     *     description?: string|null,
     *     partitionSpec?: Shapes\DataLakeDatasetPartitionSpec|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
