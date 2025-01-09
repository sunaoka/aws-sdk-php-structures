<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 */
class DeleteResourceRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
