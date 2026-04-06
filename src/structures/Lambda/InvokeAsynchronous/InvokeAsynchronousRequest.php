<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeAsynchronous;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|resource|\Psr\Http\Message\StreamInterface $InvokeArgs
 */
class InvokeAsynchronousRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     InvokeArgs: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
