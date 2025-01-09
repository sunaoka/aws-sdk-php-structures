<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalRecoveryPointsToScanCount
 * @property int $TotalItemsToScanCount
 */
class SearchScopeSummary extends Shape
{
    /**
     * @param array{
     *     TotalRecoveryPointsToScanCount?: int,
     *     TotalItemsToScanCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
