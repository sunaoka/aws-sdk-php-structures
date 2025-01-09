<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamResourceDiscovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationsEntityPath
 */
class AddIpamOrganizationalUnitExclusion extends Shape
{
    /**
     * @param array{OrganizationsEntityPath?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
