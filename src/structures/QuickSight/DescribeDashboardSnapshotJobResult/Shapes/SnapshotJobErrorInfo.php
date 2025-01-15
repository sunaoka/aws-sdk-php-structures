<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorMessage
 * @property string|null $ErrorType
 */
class SnapshotJobErrorInfo extends Shape
{
    /**
     * @param array{
     *     ErrorMessage?: string|null,
     *     ErrorType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
