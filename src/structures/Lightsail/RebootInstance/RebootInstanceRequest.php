<?php

namespace Sunaoka\Aws\Structures\Lightsail\RebootInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 */
class RebootInstanceRequest extends Request
{
    /**
     * @param array{instanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
