<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\GetWebFunctionEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $functionName
 * @property string $endpointName
 */
class GetWebFunctionEndpointRequest extends Request
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
