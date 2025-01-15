<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeVpcEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcEndpointId
 * @property 'ENDPOINT_NOT_FOUND'|'SERVER_ERROR'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class VpcEndpointError extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string|null,
     *     ErrorCode?: 'ENDPOINT_NOT_FOUND'|'SERVER_ERROR'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
