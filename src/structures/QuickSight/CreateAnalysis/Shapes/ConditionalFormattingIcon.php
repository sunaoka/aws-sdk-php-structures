<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingIconSet $IconSet
 * @property ConditionalFormattingCustomIconCondition $CustomCondition
 */
class ConditionalFormattingIcon extends Shape
{
    /**
     * @param array{
     *     IconSet?: ConditionalFormattingIconSet,
     *     CustomCondition?: ConditionalFormattingCustomIconCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
