<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamResourceDiscovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OrganizationsEntityPath
 */
class IpamOrganizationalUnitExclusion extends Shape
{
    /**
     * @param array{OrganizationsEntityPath?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
