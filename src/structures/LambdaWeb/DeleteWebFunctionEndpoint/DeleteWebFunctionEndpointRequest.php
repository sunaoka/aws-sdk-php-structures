<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\DeleteWebFunctionEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $functionName
 * @property string $endpointName
 */
class DeleteWebFunctionEndpointRequest extends Request
{
    /**
     * @param array{
     *     functionName: string,
     *     endpointName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
