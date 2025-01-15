<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePrivateDnsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $UpdaterRequestId
 * @property Shapes\PrivateDnsNamespaceChange $Namespace
 */
class UpdatePrivateDnsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     UpdaterRequestId?: string|null,
     *     Namespace: Shapes\PrivateDnsNamespaceChange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
