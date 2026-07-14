<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleAttributeFilter|null $AttributeFilter
 */
class RulesSearchFilter extends Shape
{
    /**
     * @param array{AttributeFilter?: RuleAttributeFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
