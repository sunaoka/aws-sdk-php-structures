<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINDING_FIELDS_UPDATE'|'EXTERNAL_INTEGRATION'|'RESOURCE_FIELDS_UPDATE' $Type
 * @property AutomationRulesFindingFieldsUpdateV2|null $FindingFieldsUpdate
 * @property ExternalIntegrationConfiguration|null $ExternalIntegrationConfiguration
 * @property AutomationRulesResourceFieldsUpdateV2|null $ResourceFieldsUpdate
 */
class AutomationRulesActionV2 extends Shape
{
    /**
     * @param array{
     *     Type: 'FINDING_FIELDS_UPDATE'|'EXTERNAL_INTEGRATION'|'RESOURCE_FIELDS_UPDATE',
     *     FindingFieldsUpdate?: AutomationRulesFindingFieldsUpdateV2|null,
     *     ExternalIntegrationConfiguration?: ExternalIntegrationConfiguration|null,
     *     ResourceFieldsUpdate?: AutomationRulesResourceFieldsUpdateV2|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
