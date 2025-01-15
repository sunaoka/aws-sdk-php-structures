<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVIDER'|'RULE_BASED' $idMappingType
 * @property NamespaceProviderProperties|null $providerProperties
 * @property NamespaceRuleBasedProperties|null $ruleBasedProperties
 */
class IdNamespaceIdMappingWorkflowProperties extends Shape
{
    /**
     * @param array{
     *     idMappingType: 'PROVIDER'|'RULE_BASED',
     *     providerProperties?: NamespaceProviderProperties|null,
     *     ruleBasedProperties?: NamespaceRuleBasedProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
