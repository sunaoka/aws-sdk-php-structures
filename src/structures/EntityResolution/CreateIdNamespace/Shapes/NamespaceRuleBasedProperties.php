<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Rule>|null $rules
 * @property list<'SOURCE'|'TARGET'>|null $ruleDefinitionTypes
 * @property 'ONE_TO_ONE'|'MANY_TO_MANY'|null $attributeMatchingModel
 * @property list<'ONE_SOURCE_TO_ONE_TARGET'|'MANY_SOURCE_TO_ONE_TARGET'>|null $recordMatchingModels
 */
class NamespaceRuleBasedProperties extends Shape
{
    /**
     * @param array{
     *     rules?: list<Rule>|null,
     *     ruleDefinitionTypes?: list<'SOURCE'|'TARGET'>|null,
     *     attributeMatchingModel?: 'ONE_TO_ONE'|'MANY_TO_MANY'|null,
     *     recordMatchingModels?: list<'ONE_SOURCE_TO_ONE_TARGET'|'MANY_SOURCE_TO_ONE_TARGET'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
