<?php

namespace Sunaoka\Aws\Structures\OpsWorks\StopStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 */
class StopStackRequest extends Request
{
    /**
     * @param array{StackId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
