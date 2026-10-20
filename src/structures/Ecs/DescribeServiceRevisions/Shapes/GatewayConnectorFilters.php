<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PUBLIC'|'PRIVATE'>|null $accessTypes
 */
class GatewayConnectorFilters extends Shape
{
    /**
     * @param array{accessTypes?: list<'PUBLIC'|'PRIVATE'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
