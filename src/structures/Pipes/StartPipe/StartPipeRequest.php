<?php

namespace Sunaoka\Aws\Structures\Pipes\StartPipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StartPipeRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
