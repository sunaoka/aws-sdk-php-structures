<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVIDER'|'RULE_BASED' $idMappingType
 * @property NamespaceProviderProperties $providerProperties
 * @property NamespaceRuleBasedProperties $ruleBasedProperties
 */
class IdNamespaceIdMappingWorkflowProperties extends Shape
{
    /**
     * @param array{
     *     idMappingType: 'PROVIDER'|'RULE_BASED',
     *     providerProperties?: NamespaceProviderProperties,
     *     ruleBasedProperties?: NamespaceRuleBasedProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
