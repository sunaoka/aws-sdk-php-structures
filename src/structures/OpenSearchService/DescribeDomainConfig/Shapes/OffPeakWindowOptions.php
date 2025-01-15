<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property OffPeakWindow|null $OffPeakWindow
 */
class OffPeakWindowOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     OffPeakWindow?: OffPeakWindow|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
