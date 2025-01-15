<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Keyword
 * @property list<string>|null $Settings
 */
class RuleOption extends Shape
{
    /**
     * @param array{
     *     Keyword: string,
     *     Settings?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
