<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\UpdateAnalyzer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UnusedAccessConfiguration $unusedAccess
 */
class AnalyzerConfiguration extends Shape
{
    /**
     * @param array{unusedAccess?: UnusedAccessConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
