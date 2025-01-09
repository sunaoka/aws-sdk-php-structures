<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionConcurrency;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property int<0, max> $ReservedConcurrentExecutions
 */
class PutFunctionConcurrencyRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     ReservedConcurrentExecutions: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
