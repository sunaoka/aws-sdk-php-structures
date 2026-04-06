<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataLakeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $namespace
 * @property string $name
 * @property string|null $description
 */
class UpdateDataLakeDatasetRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     namespace: string,
     *     name: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
