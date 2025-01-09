<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionConcurrency;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 */
class GetFunctionConcurrencyRequest extends Request
{
    /**
     * @param array{FunctionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
