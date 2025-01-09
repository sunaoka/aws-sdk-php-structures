<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property 'PENDING'|'DELETING'|'ACTIVE'|'FAILED' $status
 */
class CreateVpcEndpointDetail extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     status?: 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
