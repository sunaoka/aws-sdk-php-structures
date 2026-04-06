<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAnalyzers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UnusedAccessConfiguration|null $unusedAccess
 * @property InternalAccessConfiguration|null $internalAccess
 */
class AnalyzerConfiguration extends Shape
{
    /**
     * @param array{
     *     unusedAccess?: UnusedAccessConfiguration|null,
     *     internalAccess?: InternalAccessConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
