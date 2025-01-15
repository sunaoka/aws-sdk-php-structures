<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateHttpNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $UpdaterRequestId
 * @property Shapes\HttpNamespaceChange $Namespace
 */
class UpdateHttpNamespaceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     UpdaterRequestId?: string|null,
     *     Namespace: Shapes\HttpNamespaceChange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
