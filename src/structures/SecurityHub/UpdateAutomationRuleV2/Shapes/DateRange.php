<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Value
 * @property 'DAYS'|null $Unit
 */
class DateRange extends Shape
{
    /**
     * @param array{
     *     Value?: int|null,
     *     Unit?: 'DAYS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
