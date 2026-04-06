<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $sessionActionId
 */
class GetSessionActionRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     sessionActionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
