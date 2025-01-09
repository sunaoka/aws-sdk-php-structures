<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteCommandExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionId
 * @property string $targetArn
 */
class DeleteCommandExecutionRequest extends Request
{
    /**
     * @param array{
     *     executionId: string,
     *     targetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
