<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetEndpointPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 */
class GetEndpointPolicyRequest extends Request
{
    /**
     * @param array{EndpointName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
