<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetOperationsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 * @property string $pageToken
 */
class GetOperationsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceName: string,
     *     pageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
