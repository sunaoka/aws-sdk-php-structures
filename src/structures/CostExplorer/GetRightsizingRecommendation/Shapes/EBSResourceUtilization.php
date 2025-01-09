<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EbsReadOpsPerSecond
 * @property string $EbsWriteOpsPerSecond
 * @property string $EbsReadBytesPerSecond
 * @property string $EbsWriteBytesPerSecond
 */
class EBSResourceUtilization extends Shape
{
    /**
     * @param array{
     *     EbsReadOpsPerSecond?: string,
     *     EbsWriteOpsPerSecond?: string,
     *     EbsReadBytesPerSecond?: string,
     *     EbsWriteBytesPerSecond?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
