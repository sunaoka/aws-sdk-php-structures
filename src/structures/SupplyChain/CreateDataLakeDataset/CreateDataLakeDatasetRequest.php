<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataLakeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $namespace
 * @property string $name
 * @property Shapes\DataLakeDatasetSchema $schema
 * @property string $description
 * @property array<string, string> $tags
 */
class CreateDataLakeDatasetRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     namespace: string,
     *     name: string,
     *     schema?: Shapes\DataLakeDatasetSchema,
     *     description?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
