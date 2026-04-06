<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalActiveFindings
 * @property int|null $totalResolvedFindings
 * @property int|null $totalArchivedFindings
 */
class InternalAccessResourceTypeDetails extends Shape
{
    /**
     * @param array{
     *     totalActiveFindings?: int|null,
     *     totalResolvedFindings?: int|null,
     *     totalArchivedFindings?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
