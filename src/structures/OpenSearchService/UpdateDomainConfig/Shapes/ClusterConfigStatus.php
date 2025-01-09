<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterConfig $Options
 * @property OptionStatus $Status
 */
class ClusterConfigStatus extends Shape
{
    /**
     * @param array{
     *     Options: ClusterConfig,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
