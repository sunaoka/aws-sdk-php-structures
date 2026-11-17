<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteEndpointPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 */
class DeleteEndpointPolicyRequest extends Request
{
    /**
     * @param array{EndpointName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
