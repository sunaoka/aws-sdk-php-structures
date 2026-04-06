<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property list<string>|null $values
 * @property list<'EQUALS'|'ABSENT'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'GREATER_THAN_OR_EQUAL'|'CASE_SENSITIVE'|'CASE_INSENSITIVE'>|null $matchOptions
 */
class TagValues extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     values?: list<string>|null,
     *     matchOptions?: list<'EQUALS'|'ABSENT'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'GREATER_THAN_OR_EQUAL'|'CASE_SENSITIVE'|'CASE_INSENSITIVE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
