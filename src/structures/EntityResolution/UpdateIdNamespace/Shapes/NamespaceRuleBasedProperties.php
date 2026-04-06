<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ONE_TO_ONE'|'MANY_TO_MANY'|null $attributeMatchingModel
 * @property list<'ONE_SOURCE_TO_ONE_TARGET'|'MANY_SOURCE_TO_ONE_TARGET'>|null $recordMatchingModels
 * @property list<'SOURCE'|'TARGET'>|null $ruleDefinitionTypes
 * @property list<Rule>|null $rules
 */
class NamespaceRuleBasedProperties extends Shape
{
    /**
     * @param array{
     *     attributeMatchingModel?: 'ONE_TO_ONE'|'MANY_TO_MANY'|null,
     *     recordMatchingModels?: list<'ONE_SOURCE_TO_ONE_TARGET'|'MANY_SOURCE_TO_ONE_TARGET'>|null,
     *     ruleDefinitionTypes?: list<'SOURCE'|'TARGET'>|null,
     *     rules?: list<Rule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
