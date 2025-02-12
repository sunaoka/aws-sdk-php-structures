<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $errorMessage
 * @property string|null $errorCode
 */
class VpcEndpointErrorDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     errorMessage?: string|null,
     *     errorCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
