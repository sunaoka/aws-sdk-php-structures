<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 */
class GetRestApiRequest extends Request
{
    /**
     * @param array{restApiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
