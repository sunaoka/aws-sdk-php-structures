<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $unusedAccessType
 * @property int|null $total
 */
class UnusedAccessTypeStatistics extends Shape
{
    /**
     * @param array{
     *     unusedAccessType?: string|null,
     *     total?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
