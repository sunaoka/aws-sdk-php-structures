<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINDING_FIELDS_UPDATE'|null $Type
 * @property AutomationRulesFindingFieldsUpdate|null $FindingFieldsUpdate
 */
class AutomationRulesAction extends Shape
{
    /**
     * @param array{
     *     Type?: 'FINDING_FIELDS_UPDATE'|null,
     *     FindingFieldsUpdate?: AutomationRulesFindingFieldsUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
