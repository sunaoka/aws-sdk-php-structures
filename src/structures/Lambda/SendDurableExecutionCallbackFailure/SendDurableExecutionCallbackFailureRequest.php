<?php

namespace Sunaoka\Aws\Structures\Lambda\SendDurableExecutionCallbackFailure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallbackId
 * @property Shapes\ErrorObject|null $Error
 */
class SendDurableExecutionCallbackFailureRequest extends Request
{
    /**
     * @param array{
     *     CallbackId: string,
     *     Error?: Shapes\ErrorObject|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
