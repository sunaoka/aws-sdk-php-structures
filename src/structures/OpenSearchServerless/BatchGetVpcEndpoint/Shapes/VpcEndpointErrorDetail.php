<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorCode
 * @property string $errorMessage
 * @property string $id
 */
class VpcEndpointErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorCode?: string,
     *     errorMessage?: string,
     *     id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
