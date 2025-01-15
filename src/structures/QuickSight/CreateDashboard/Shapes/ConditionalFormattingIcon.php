<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingIconSet|null $IconSet
 * @property ConditionalFormattingCustomIconCondition|null $CustomCondition
 */
class ConditionalFormattingIcon extends Shape
{
    /**
     * @param array{
     *     IconSet?: ConditionalFormattingIconSet|null,
     *     CustomCondition?: ConditionalFormattingCustomIconCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
