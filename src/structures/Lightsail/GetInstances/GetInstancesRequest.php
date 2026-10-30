<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $pageToken
 * @property bool|null $includeHealthStatus
 */
class GetInstancesRequest extends Request
{
    /**
     * @param array{
     *     pageToken?: string|null,
     *     includeHealthStatus?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
