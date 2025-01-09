<?php

namespace Sunaoka\Aws\Structures\Ssm\DeregisterManagedInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 */
class DeregisterManagedInstanceRequest extends Request
{
    /**
     * @param array{InstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
