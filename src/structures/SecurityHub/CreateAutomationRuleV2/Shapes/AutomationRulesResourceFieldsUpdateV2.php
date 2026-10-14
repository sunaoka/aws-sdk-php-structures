<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Very High'|'High'|'Medium'|'Low'|'Unknown' $Criticality
 */
class AutomationRulesResourceFieldsUpdateV2 extends Shape
{
    /**
     * @param array{Criticality: 'Very High'|'High'|'Medium'|'Low'|'Unknown'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
