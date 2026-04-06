<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\GetAsyncInvoke;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $invocationArn
 */
class GetAsyncInvokeRequest extends Request
{
    /**
     * @param array{invocationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
