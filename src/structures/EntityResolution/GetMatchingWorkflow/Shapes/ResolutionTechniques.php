<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProviderProperties|null $providerProperties
 * @property 'RULE_MATCHING'|'ML_MATCHING'|'PROVIDER' $resolutionType
 * @property RuleBasedProperties|null $ruleBasedProperties
 */
class ResolutionTechniques extends Shape
{
    /**
     * @param array{
     *     providerProperties?: ProviderProperties|null,
     *     resolutionType: 'RULE_MATCHING'|'ML_MATCHING'|'PROVIDER',
     *     ruleBasedProperties?: RuleBasedProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
