<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySecurityGroupRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityGroupRuleId
 * @property SecurityGroupRuleRequest $SecurityGroupRule
 */
class SecurityGroupRuleUpdate extends Shape
{
    /**
     * @param array{
     *     SecurityGroupRuleId: string,
     *     SecurityGroupRule?: SecurityGroupRuleRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
