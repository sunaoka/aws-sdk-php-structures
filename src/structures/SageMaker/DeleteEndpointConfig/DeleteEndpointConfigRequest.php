<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteEndpointConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointConfigName
 */
class DeleteEndpointConfigRequest extends Request
{
    /**
     * @param array{EndpointConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
