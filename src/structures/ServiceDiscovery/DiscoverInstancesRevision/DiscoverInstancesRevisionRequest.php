<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DiscoverInstancesRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamespaceName
 * @property string $ServiceName
 */
class DiscoverInstancesRevisionRequest extends Request
{
    /**
     * @param array{
     *     NamespaceName: string,
     *     ServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
