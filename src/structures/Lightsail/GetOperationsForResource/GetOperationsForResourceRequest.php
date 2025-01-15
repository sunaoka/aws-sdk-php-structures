<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetOperationsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 * @property string|null $pageToken
 */
class GetOperationsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceName: string,
     *     pageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
