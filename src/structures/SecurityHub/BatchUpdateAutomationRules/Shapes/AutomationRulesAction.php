<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINDING_FIELDS_UPDATE' $Type
 * @property AutomationRulesFindingFieldsUpdate $FindingFieldsUpdate
 */
class AutomationRulesAction extends Shape
{
    /**
     * @param array{
     *     Type?: 'FINDING_FIELDS_UPDATE',
     *     FindingFieldsUpdate?: AutomationRulesFindingFieldsUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
