<?php

namespace Sunaoka\Aws\Structures\Lambda\SendDurableExecutionCallbackSuccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallbackId
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Result
 */
class SendDurableExecutionCallbackSuccessRequest extends Request
{
    /**
     * @param array{
     *     CallbackId: string,
     *     Result?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
