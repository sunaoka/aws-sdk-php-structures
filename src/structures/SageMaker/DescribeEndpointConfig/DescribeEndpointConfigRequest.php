<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointConfigName
 */
class DescribeEndpointConfigRequest extends Request
{
    /**
     * @param array{EndpointConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
