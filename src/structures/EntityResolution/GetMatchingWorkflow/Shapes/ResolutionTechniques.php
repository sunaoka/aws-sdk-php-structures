<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProviderProperties $providerProperties
 * @property 'RULE_MATCHING'|'ML_MATCHING'|'PROVIDER' $resolutionType
 * @property RuleBasedProperties $ruleBasedProperties
 */
class ResolutionTechniques extends Shape
{
    /**
     * @param array{
     *     providerProperties?: ProviderProperties,
     *     resolutionType: 'RULE_MATCHING'|'ML_MATCHING'|'PROVIDER',
     *     ruleBasedProperties?: RuleBasedProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
