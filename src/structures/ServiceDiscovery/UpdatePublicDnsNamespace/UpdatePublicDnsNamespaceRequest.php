<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePublicDnsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $UpdaterRequestId
 * @property Shapes\PublicDnsNamespaceChange $Namespace
 */
class UpdatePublicDnsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     UpdaterRequestId?: string|null,
     *     Namespace: Shapes\PublicDnsNamespaceChange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
