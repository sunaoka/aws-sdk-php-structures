<?php

namespace Sunaoka\Aws\Structures\Sfn\GetActivityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $activityArn
 * @property string $workerName
 */
class GetActivityTaskRequest extends Request
{
    /**
     * @param array{
     *     activityArn: string,
     *     workerName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
