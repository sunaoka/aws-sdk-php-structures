<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListRuleGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 */
class RuleGroupMetadata extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
