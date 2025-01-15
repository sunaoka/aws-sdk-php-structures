<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 */
class LabelSummary extends Shape
{
    /**
     * @param array{Name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
