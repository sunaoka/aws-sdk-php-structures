<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EbsReadOpsPerSecond
 * @property string|null $EbsWriteOpsPerSecond
 * @property string|null $EbsReadBytesPerSecond
 * @property string|null $EbsWriteBytesPerSecond
 */
class EBSResourceUtilization extends Shape
{
    /**
     * @param array{
     *     EbsReadOpsPerSecond?: string|null,
     *     EbsWriteOpsPerSecond?: string|null,
     *     EbsReadBytesPerSecond?: string|null,
     *     EbsWriteBytesPerSecond?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
