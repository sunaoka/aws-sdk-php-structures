<?php

namespace Sunaoka\Aws\Structures\Sfn\SendTaskFailure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property string|null $error
 * @property string|null $cause
 */
class SendTaskFailureRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     error?: string|null,
     *     cause?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
