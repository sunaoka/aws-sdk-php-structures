<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVIDER'|'RULE_BASED' $idMappingType
 * @property IdMappingRuleBasedProperties|null $ruleBasedProperties
 * @property ProviderProperties|null $providerProperties
 */
class IdMappingTechniques extends Shape
{
    /**
     * @param array{
     *     idMappingType: 'PROVIDER'|'RULE_BASED',
     *     ruleBasedProperties?: IdMappingRuleBasedProperties|null,
     *     providerProperties?: ProviderProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
