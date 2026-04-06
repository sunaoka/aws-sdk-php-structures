<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RULE_MATCHING'|'ML_MATCHING'|null $resolutionType
 * @property RuleBasedProperties|null $ruleBasedProperties
 */
class ResolutionTechniques extends Shape
{
    /**
     * @param array{
     *     resolutionType?: 'RULE_MATCHING'|'ML_MATCHING'|null,
     *     ruleBasedProperties?: RuleBasedProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
