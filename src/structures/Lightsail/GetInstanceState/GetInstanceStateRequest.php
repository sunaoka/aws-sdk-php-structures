<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 */
class GetInstanceStateRequest extends Request
{
    /**
     * @param array{instanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
