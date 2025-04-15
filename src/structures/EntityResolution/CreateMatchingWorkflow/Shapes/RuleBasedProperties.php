<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Rule> $rules
 * @property 'ONE_TO_ONE'|'MANY_TO_MANY' $attributeMatchingModel
 * @property 'IDENTIFIER_GENERATION'|'INDEXING'|null $matchPurpose
 */
class RuleBasedProperties extends Shape
{
    /**
     * @param array{
     *     rules: list<Rule>,
     *     attributeMatchingModel: 'ONE_TO_ONE'|'MANY_TO_MANY',
     *     matchPurpose?: 'IDENTIFIER_GENERATION'|'INDEXING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
