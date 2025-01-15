<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DiskReadOpsPerSecond
 * @property string|null $DiskWriteOpsPerSecond
 * @property string|null $DiskReadBytesPerSecond
 * @property string|null $DiskWriteBytesPerSecond
 */
class DiskResourceUtilization extends Shape
{
    /**
     * @param array{
     *     DiskReadOpsPerSecond?: string|null,
     *     DiskWriteOpsPerSecond?: string|null,
     *     DiskReadBytesPerSecond?: string|null,
     *     DiskWriteBytesPerSecond?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
