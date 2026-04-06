<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetCommandExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sandboxId
 * @property list<string> $commandExecutionIds
 */
class BatchGetCommandExecutionsRequest extends Request
{
    /**
     * @param array{
     *     sandboxId: string,
     *     commandExecutionIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
