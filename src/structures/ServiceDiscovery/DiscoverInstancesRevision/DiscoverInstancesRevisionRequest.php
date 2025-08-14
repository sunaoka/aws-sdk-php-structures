<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DiscoverInstancesRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamespaceName
 * @property string $ServiceName
 * @property string|null $OwnerAccount
 */
class DiscoverInstancesRevisionRequest extends Request
{
    /**
     * @param array{
     *     NamespaceName: string,
     *     ServiceName: string,
     *     OwnerAccount?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
