<?php

namespace Sunaoka\Aws\Structures\Sfn\GetActivityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $activityArn
 * @property string|null $workerName
 */
class GetActivityTaskRequest extends Request
{
    /**
     * @param array{
     *     activityArn: string,
     *     workerName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
