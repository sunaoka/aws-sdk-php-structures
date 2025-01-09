<?php

namespace Sunaoka\Aws\Structures\Sfn\SendTaskFailure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property string $error
 * @property string $cause
 */
class SendTaskFailureRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     error?: string,
     *     cause?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
