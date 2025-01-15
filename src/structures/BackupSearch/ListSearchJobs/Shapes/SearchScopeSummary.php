<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalRecoveryPointsToScanCount
 * @property int|null $TotalItemsToScanCount
 */
class SearchScopeSummary extends Shape
{
    /**
     * @param array{
     *     TotalRecoveryPointsToScanCount?: int|null,
     *     TotalItemsToScanCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
