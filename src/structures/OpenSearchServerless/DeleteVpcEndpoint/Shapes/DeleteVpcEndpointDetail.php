<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 */
class DeleteVpcEndpointDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     status?: 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
