<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ONE_TO_ONE'|'MANY_TO_MANY' $attributeMatchingModel
 * @property 'ONE_SOURCE_TO_ONE_TARGET'|'MANY_SOURCE_TO_ONE_TARGET' $recordMatchingModel
 * @property 'SOURCE'|'TARGET' $ruleDefinitionType
 * @property list<Rule>|null $rules
 */
class IdMappingRuleBasedProperties extends Shape
{
    /**
     * @param array{
     *     attributeMatchingModel: 'ONE_TO_ONE'|'MANY_TO_MANY',
     *     recordMatchingModel: 'ONE_SOURCE_TO_ONE_TARGET'|'MANY_SOURCE_TO_ONE_TARGET',
     *     ruleDefinitionType: 'SOURCE'|'TARGET',
     *     rules?: list<Rule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
