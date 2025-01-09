<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstancePortStates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 */
class GetInstancePortStatesRequest extends Request
{
    /**
     * @param array{instanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
