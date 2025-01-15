<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecurityGroupRuleId
 * @property string|null $Description
 */
class SecurityGroupRuleDescription extends Shape
{
    /**
     * @param array{
     *     SecurityGroupRuleId?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
