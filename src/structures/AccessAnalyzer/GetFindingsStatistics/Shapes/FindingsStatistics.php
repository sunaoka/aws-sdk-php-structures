<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalAccessFindingsStatistics|null $externalAccessFindingsStatistics
 * @property UnusedAccessFindingsStatistics|null $unusedAccessFindingsStatistics
 */
class FindingsStatistics extends Shape
{
    /**
     * @param array{
     *     externalAccessFindingsStatistics?: ExternalAccessFindingsStatistics|null,
     *     unusedAccessFindingsStatistics?: UnusedAccessFindingsStatistics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
