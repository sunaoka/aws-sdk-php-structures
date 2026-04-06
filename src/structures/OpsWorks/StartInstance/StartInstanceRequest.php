<?php

namespace Sunaoka\Aws\Structures\OpsWorks\StartInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 */
class StartInstanceRequest extends Request
{
    /**
     * @param array{InstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
