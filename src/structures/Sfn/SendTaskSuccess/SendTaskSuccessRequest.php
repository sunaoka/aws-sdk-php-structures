<?php

namespace Sunaoka\Aws\Structures\Sfn\SendTaskSuccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property string $output
 */
class SendTaskSuccessRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     output: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
