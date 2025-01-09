<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeregisterInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 */
class DeregisterInstanceRequest extends Request
{
    /**
     * @param array{InstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
