<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OffPeakWindowOptions|null $Options
 * @property OptionStatus|null $Status
 */
class OffPeakWindowOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options?: OffPeakWindowOptions|null,
     *     Status?: OptionStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
