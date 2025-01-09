<?php

namespace Sunaoka\Aws\Structures\DataPipeline\SetTaskStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property 'FINISHED'|'FAILED'|'FALSE' $taskStatus
 * @property string $errorId
 * @property string $errorMessage
 * @property string $errorStackTrace
 */
class SetTaskStatusRequest extends Request
{
    /**
     * @param array{
     *     taskId: string,
     *     taskStatus: 'FINISHED'|'FAILED'|'FALSE',
     *     errorId?: string,
     *     errorMessage?: string,
     *     errorStackTrace?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
