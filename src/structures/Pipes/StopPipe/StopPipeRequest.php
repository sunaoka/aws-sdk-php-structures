<?php

namespace Sunaoka\Aws\Structures\Pipes\StopPipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StopPipeRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
