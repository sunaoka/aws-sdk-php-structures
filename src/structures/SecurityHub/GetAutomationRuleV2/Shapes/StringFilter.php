<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property 'EQUALS'|'PREFIX'|'NOT_EQUALS'|'PREFIX_NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS'|'CONTAINS_WORD'|null $Comparison
 */
class StringFilter extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Comparison?: 'EQUALS'|'PREFIX'|'NOT_EQUALS'|'PREFIX_NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS'|'CONTAINS_WORD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
