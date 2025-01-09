<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVIDER'|'RULE_BASED' $idMappingType
 * @property ProviderProperties $providerProperties
 * @property IdMappingRuleBasedProperties $ruleBasedProperties
 */
class IdMappingTechniques extends Shape
{
    /**
     * @param array{
     *     idMappingType: 'PROVIDER'|'RULE_BASED',
     *     providerProperties?: ProviderProperties,
     *     ruleBasedProperties?: IdMappingRuleBasedProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
