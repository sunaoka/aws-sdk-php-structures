<?php

namespace Sunaoka\Aws\Structures\SageMaker\PutEndpointPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $ResourcePolicy
 */
class PutEndpointPolicyRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     ResourcePolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
