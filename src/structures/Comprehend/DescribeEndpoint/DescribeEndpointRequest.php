<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 */
class DescribeEndpointRequest extends Request
{
    /**
     * @param array{EndpointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
