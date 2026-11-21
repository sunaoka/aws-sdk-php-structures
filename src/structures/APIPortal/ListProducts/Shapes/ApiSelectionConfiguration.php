<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOM'|'RULE_BASED' $apiSelectionMode
 * @property list<RuleFilter>|null $ruleFilters
 */
class ApiSelectionConfiguration extends Shape
{
    /**
     * @param array{
     *     apiSelectionMode: 'CUSTOM'|'RULE_BASED',
     *     ruleFilters?: list<RuleFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
