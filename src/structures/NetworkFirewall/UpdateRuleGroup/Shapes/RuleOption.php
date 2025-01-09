<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Keyword
 * @property list<string> $Settings
 */
class RuleOption extends Shape
{
    /**
     * @param array{
     *     Keyword: string,
     *     Settings?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
