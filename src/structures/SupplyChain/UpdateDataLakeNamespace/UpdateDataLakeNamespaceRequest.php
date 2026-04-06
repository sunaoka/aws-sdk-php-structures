<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataLakeNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $name
 * @property string|null $description
 */
class UpdateDataLakeNamespaceRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     name: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
