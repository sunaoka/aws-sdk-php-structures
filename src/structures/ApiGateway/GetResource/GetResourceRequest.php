<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property list<string> $embed
 */
class GetResourceRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     embed?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
