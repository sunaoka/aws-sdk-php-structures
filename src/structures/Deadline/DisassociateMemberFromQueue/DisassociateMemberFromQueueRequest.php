<?php

namespace Sunaoka\Aws\Structures\Deadline\DisassociateMemberFromQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $principalId
 */
class DisassociateMemberFromQueueRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     principalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
