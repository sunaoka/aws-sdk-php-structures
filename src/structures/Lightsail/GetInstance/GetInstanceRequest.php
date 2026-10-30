<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property bool|null $includeHealthStatus
 */
class GetInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     includeHealthStatus?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
