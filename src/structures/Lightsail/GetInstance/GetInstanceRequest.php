<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 */
class GetInstanceRequest extends Request
{
    /**
     * @param array{instanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
