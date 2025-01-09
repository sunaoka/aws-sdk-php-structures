<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeAsync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $InvokeArgs
 */
class InvokeAsyncRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     InvokeArgs: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
