<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VPCDerivedInfo $Options
 * @property OptionStatus $Status
 */
class VPCDerivedInfoStatus extends Shape
{
    /**
     * @param array{
     *     Options: VPCDerivedInfo,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
