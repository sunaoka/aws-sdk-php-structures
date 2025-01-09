<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsIngress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityGroupRuleId
 * @property string $Description
 */
class SecurityGroupRuleDescription extends Shape
{
    /**
     * @param array{
     *     SecurityGroupRuleId?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
