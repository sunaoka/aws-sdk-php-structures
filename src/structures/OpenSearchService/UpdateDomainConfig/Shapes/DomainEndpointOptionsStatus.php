<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainEndpointOptions $Options
 * @property OptionStatus $Status
 */
class DomainEndpointOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: DomainEndpointOptions,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
