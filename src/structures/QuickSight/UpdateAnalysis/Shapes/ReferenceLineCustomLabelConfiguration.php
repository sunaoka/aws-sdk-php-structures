<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomLabel
 */
class ReferenceLineCustomLabelConfiguration extends Shape
{
    /**
     * @param array{CustomLabel: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
