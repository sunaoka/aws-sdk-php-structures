<?php

namespace Sunaoka\Aws\Structures\DataPipeline\SetTaskStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property 'FINISHED'|'FAILED'|'FALSE' $taskStatus
 * @property string|null $errorId
 * @property string|null $errorMessage
 * @property string|null $errorStackTrace
 */
class SetTaskStatusRequest extends Request
{
    /**
     * @param array{
     *     taskId: string,
     *     taskStatus: 'FINISHED'|'FAILED'|'FALSE',
     *     errorId?: string|null,
     *     errorMessage?: string|null,
     *     errorStackTrace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
