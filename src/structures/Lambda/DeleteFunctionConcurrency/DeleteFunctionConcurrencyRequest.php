<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteFunctionConcurrency;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 */
class DeleteFunctionConcurrencyRequest extends Request
{
    /**
     * @param array{FunctionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
