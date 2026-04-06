<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STREAMING_WSP'|null $AccessEndpointType
 * @property string|null $VpcEndpointId
 */
class AccessEndpoint extends Shape
{
    /**
     * @param array{
     *     AccessEndpointType?: 'STREAMING_WSP'|null,
     *     VpcEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
