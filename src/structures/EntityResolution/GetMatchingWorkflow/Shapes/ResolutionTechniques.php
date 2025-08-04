<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RULE_MATCHING'|'ML_MATCHING'|'PROVIDER' $resolutionType
 * @property RuleBasedProperties|null $ruleBasedProperties
 * @property RuleConditionProperties|null $ruleConditionProperties
 * @property ProviderProperties|null $providerProperties
 */
class ResolutionTechniques extends Shape
{
    /**
     * @param array{
     *     resolutionType: 'RULE_MATCHING'|'ML_MATCHING'|'PROVIDER',
     *     ruleBasedProperties?: RuleBasedProperties|null,
     *     ruleConditionProperties?: RuleConditionProperties|null,
     *     providerProperties?: ProviderProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
