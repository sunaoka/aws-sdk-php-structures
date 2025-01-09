<?php

namespace Sunaoka\Aws\Structures\OpsWorks\StartStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 */
class StartStackRequest extends Request
{
    /**
     * @param array{StackId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
