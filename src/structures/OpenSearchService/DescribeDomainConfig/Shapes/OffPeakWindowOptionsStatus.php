<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OffPeakWindowOptions $Options
 * @property OptionStatus $Status
 */
class OffPeakWindowOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options?: OffPeakWindowOptions,
     *     Status?: OptionStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
