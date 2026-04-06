<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListGroupingAttributeDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupingName
 * @property list<string>|null $GroupingSourceKeys
 * @property string|null $DefaultGroupingValue
 */
class GroupingAttributeDefinition extends Shape
{
    /**
     * @param array{
     *     GroupingName: string,
     *     GroupingSourceKeys?: list<string>|null,
     *     DefaultGroupingValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
