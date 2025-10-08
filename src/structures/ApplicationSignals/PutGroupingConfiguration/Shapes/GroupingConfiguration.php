<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\PutGroupingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GroupingAttributeDefinition> $GroupingAttributeDefinitions
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class GroupingConfiguration extends Shape
{
    /**
     * @param array{
     *     GroupingAttributeDefinitions: list<GroupingAttributeDefinition>,
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
