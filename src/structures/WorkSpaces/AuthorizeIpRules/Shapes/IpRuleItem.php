<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\AuthorizeIpRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ipRule
 * @property string|null $ruleDesc
 */
class IpRuleItem extends Shape
{
    /**
     * @param array{
     *     ipRule?: string|null,
     *     ruleDesc?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
