<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ONE_TO_ONE'|'MANY_TO_MANY' $attributeMatchingModel
 * @property 'IDENTIFIER_GENERATION'|'INDEXING'|null $matchPurpose
 * @property list<Rule> $rules
 */
class RuleBasedProperties extends Shape
{
    /**
     * @param array{
     *     attributeMatchingModel: 'ONE_TO_ONE'|'MANY_TO_MANY',
     *     matchPurpose?: 'IDENTIFIER_GENERATION'|'INDEXING'|null,
     *     rules: list<Rule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
