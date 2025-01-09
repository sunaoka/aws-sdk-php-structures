<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ipv4'|'dualstack' $Options
 * @property OptionStatus $Status
 */
class IPAddressTypeStatus extends Shape
{
    /**
     * @param array{
     *     Options: 'ipv4'|'dualstack',
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
