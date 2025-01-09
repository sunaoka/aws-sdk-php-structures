<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 */
class DeleteStackRequest extends Request
{
    /**
     * @param array{StackId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
