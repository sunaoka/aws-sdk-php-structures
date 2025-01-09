<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeVpcEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcEndpointId
 * @property 'ENDPOINT_NOT_FOUND'|'SERVER_ERROR' $ErrorCode
 * @property string $ErrorMessage
 */
class VpcEndpointError extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string,
     *     ErrorCode?: 'ENDPOINT_NOT_FOUND'|'SERVER_ERROR',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
