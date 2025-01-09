<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateRulesOfIpGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ipRule
 * @property string $ruleDesc
 */
class IpRuleItem extends Shape
{
    /**
     * @param array{
     *     ipRule?: string,
     *     ruleDesc?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
