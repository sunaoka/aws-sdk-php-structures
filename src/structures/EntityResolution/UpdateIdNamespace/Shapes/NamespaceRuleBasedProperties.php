<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ONE_TO_ONE'|'MANY_TO_MANY' $attributeMatchingModel
 * @property list<'ONE_SOURCE_TO_ONE_TARGET'|'MANY_SOURCE_TO_ONE_TARGET'> $recordMatchingModels
 * @property list<'SOURCE'|'TARGET'> $ruleDefinitionTypes
 * @property list<Rule> $rules
 */
class NamespaceRuleBasedProperties extends Shape
{
    /**
     * @param array{
     *     attributeMatchingModel?: 'ONE_TO_ONE'|'MANY_TO_MANY',
     *     recordMatchingModels?: list<'ONE_SOURCE_TO_ONE_TARGET'|'MANY_SOURCE_TO_ONE_TARGET'>,
     *     ruleDefinitionTypes?: list<'SOURCE'|'TARGET'>,
     *     rules?: list<Rule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
