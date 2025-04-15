<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Rule>|null $rules
 * @property 'SOURCE'|'TARGET' $ruleDefinitionType
 * @property 'ONE_TO_ONE'|'MANY_TO_MANY' $attributeMatchingModel
 * @property 'ONE_SOURCE_TO_ONE_TARGET'|'MANY_SOURCE_TO_ONE_TARGET' $recordMatchingModel
 */
class IdMappingRuleBasedProperties extends Shape
{
    /**
     * @param array{
     *     rules?: list<Rule>|null,
     *     ruleDefinitionType: 'SOURCE'|'TARGET',
     *     attributeMatchingModel: 'ONE_TO_ONE'|'MANY_TO_MANY',
     *     recordMatchingModel: 'ONE_SOURCE_TO_ONE_TARGET'|'MANY_SOURCE_TO_ONE_TARGET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
