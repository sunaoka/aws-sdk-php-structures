<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 */
class DeleteRestApiRequest extends Request
{
    /**
     * @param array{restApiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
