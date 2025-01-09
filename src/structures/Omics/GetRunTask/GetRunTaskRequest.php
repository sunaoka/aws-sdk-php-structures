<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $taskId
 */
class GetRunTaskRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
