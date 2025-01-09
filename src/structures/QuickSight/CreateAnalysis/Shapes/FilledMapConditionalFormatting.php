<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FilledMapConditionalFormattingOption> $ConditionalFormattingOptions
 */
class FilledMapConditionalFormatting extends Shape
{
    /**
     * @param array{ConditionalFormattingOptions: list<FilledMapConditionalFormattingOption>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
