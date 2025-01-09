<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribePipeRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
