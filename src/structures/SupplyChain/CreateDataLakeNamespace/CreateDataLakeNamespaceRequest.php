<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataLakeNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class CreateDataLakeNamespaceRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     name: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
