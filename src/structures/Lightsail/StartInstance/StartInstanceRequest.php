<?php

namespace Sunaoka\Aws\Structures\Lightsail\StartInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 */
class StartInstanceRequest extends Request
{
    /**
     * @param array{instanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
