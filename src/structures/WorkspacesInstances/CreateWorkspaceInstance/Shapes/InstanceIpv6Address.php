<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv6Address
 * @property bool|null $IsPrimaryIpv6
 */
class InstanceIpv6Address extends Shape
{
    /**
     * @param array{
     *     Ipv6Address?: string|null,
     *     IsPrimaryIpv6?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
