<?php

namespace Sunaoka\Aws\Structures\Translate\GetParallelData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetParallelDataRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
