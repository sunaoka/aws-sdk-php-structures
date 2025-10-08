<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CompositeFilter>|null $CompositeFilters
 * @property 'AND'|'OR'|null $CompositeOperator
 */
class OcsfFindingFilters extends Shape
{
    /**
     * @param array{
     *     CompositeFilters?: list<CompositeFilter>|null,
     *     CompositeOperator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
