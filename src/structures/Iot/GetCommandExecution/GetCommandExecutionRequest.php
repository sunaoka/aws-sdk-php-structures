<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommandExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionId
 * @property string $targetArn
 * @property bool $includeResult
 */
class GetCommandExecutionRequest extends Request
{
    /**
     * @param array{
     *     executionId: string,
     *     targetArn: string,
     *     includeResult?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
