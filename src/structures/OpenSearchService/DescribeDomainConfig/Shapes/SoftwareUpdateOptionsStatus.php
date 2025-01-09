<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SoftwareUpdateOptions $Options
 * @property OptionStatus $Status
 */
class SoftwareUpdateOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options?: SoftwareUpdateOptions,
     *     Status?: OptionStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
