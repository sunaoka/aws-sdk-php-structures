<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPolicyOrganizationTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OrganizationTargetId
 */
class IpamPolicyOrganizationTarget extends Shape
{
    /**
     * @param array{OrganizationTargetId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
