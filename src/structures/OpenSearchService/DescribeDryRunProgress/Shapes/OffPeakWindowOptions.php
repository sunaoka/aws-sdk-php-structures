<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDryRunProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property OffPeakWindow $OffPeakWindow
 */
class OffPeakWindowOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     OffPeakWindow?: OffPeakWindow
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
