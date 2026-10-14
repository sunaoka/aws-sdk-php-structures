<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListAutomationRulesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINDING_FIELDS_UPDATE'|'EXTERNAL_INTEGRATION'|'RESOURCE_FIELDS_UPDATE'|null $Type
 */
class AutomationRulesActionTypeObjectV2 extends Shape
{
    /**
     * @param array{Type?: 'FINDING_FIELDS_UPDATE'|'EXTERNAL_INTEGRATION'|'RESOURCE_FIELDS_UPDATE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
