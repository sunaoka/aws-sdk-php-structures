<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINDING_FIELDS_UPDATE'|'EXTERNAL_INTEGRATION' $Type
 * @property AutomationRulesFindingFieldsUpdateV2|null $FindingFieldsUpdate
 * @property ExternalIntegrationConfiguration|null $ExternalIntegrationConfiguration
 */
class AutomationRulesActionV2 extends Shape
{
    /**
     * @param array{
     *     Type: 'FINDING_FIELDS_UPDATE'|'EXTERNAL_INTEGRATION',
     *     FindingFieldsUpdate?: AutomationRulesFindingFieldsUpdateV2|null,
     *     ExternalIntegrationConfiguration?: ExternalIntegrationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
