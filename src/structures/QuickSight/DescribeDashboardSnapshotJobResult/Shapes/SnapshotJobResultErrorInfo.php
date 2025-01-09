<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorMessage
 * @property string $ErrorType
 */
class SnapshotJobResultErrorInfo extends Shape
{
    /**
     * @param array{
     *     ErrorMessage?: string,
     *     ErrorType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
