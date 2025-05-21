<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataLakeNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $name
 */
class GetDataLakeNamespaceRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
