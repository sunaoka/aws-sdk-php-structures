<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalAccessFindingsStatistics|null $externalAccessFindingsStatistics
 * @property InternalAccessFindingsStatistics|null $internalAccessFindingsStatistics
 * @property UnusedAccessFindingsStatistics|null $unusedAccessFindingsStatistics
 */
class FindingsStatistics extends Shape
{
    /**
     * @param array{
     *     externalAccessFindingsStatistics?: ExternalAccessFindingsStatistics|null,
     *     internalAccessFindingsStatistics?: InternalAccessFindingsStatistics|null,
     *     unusedAccessFindingsStatistics?: UnusedAccessFindingsStatistics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
