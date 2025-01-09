<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DiskReadOpsPerSecond
 * @property string $DiskWriteOpsPerSecond
 * @property string $DiskReadBytesPerSecond
 * @property string $DiskWriteBytesPerSecond
 */
class DiskResourceUtilization extends Shape
{
    /**
     * @param array{
     *     DiskReadOpsPerSecond?: string,
     *     DiskWriteOpsPerSecond?: string,
     *     DiskReadBytesPerSecond?: string,
     *     DiskWriteBytesPerSecond?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
