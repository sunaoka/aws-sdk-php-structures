<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListVpcEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'DELETING'|'ACTIVE'|'FAILED' $status
 */
class VpcEndpointFilters extends Shape
{
    /**
     * @param array{status?: 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
