<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $jobId
 * @property string $queueId
 * @property string $sessionActionId
 */
class GetSessionActionRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     jobId: string,
     *     queueId: string,
     *     sessionActionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
