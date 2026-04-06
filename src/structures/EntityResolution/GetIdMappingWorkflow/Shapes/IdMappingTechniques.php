<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVIDER'|'RULE_BASED' $idMappingType
 * @property ProviderProperties|null $providerProperties
 * @property IdMappingRuleBasedProperties|null $ruleBasedProperties
 */
class IdMappingTechniques extends Shape
{
    /**
     * @param array{
     *     idMappingType: 'PROVIDER'|'RULE_BASED',
     *     providerProperties?: ProviderProperties|null,
     *     ruleBasedProperties?: IdMappingRuleBasedProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
