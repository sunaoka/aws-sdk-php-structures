<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVIDER'|'RULE_BASED' $idMappingType
 * @property NamespaceRuleBasedProperties|null $ruleBasedProperties
 * @property NamespaceProviderProperties|null $providerProperties
 */
class IdNamespaceIdMappingWorkflowProperties extends Shape
{
    /**
     * @param array{
     *     idMappingType: 'PROVIDER'|'RULE_BASED',
     *     ruleBasedProperties?: NamespaceRuleBasedProperties|null,
     *     providerProperties?: NamespaceProviderProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
