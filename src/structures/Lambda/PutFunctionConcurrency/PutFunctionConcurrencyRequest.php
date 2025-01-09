<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionConcurrency;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property int $ReservedConcurrentExecutions
 */
class PutFunctionConcurrencyRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     ReservedConcurrentExecutions: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
