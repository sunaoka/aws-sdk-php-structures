<?php

namespace Sunaoka\Aws\Structures\Translate\DeleteParallelData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteParallelDataRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
