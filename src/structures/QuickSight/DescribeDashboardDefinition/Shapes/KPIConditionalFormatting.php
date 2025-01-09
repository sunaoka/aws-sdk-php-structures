<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<KPIConditionalFormattingOption> $ConditionalFormattingOptions
 */
class KPIConditionalFormatting extends Shape
{
    /**
     * @param array{ConditionalFormattingOptions?: list<KPIConditionalFormattingOption>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
