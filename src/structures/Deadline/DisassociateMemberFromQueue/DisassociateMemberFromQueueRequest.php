<?php

namespace Sunaoka\Aws\Structures\Deadline\DisassociateMemberFromQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $principalId
 * @property string $queueId
 */
class DisassociateMemberFromQueueRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     principalId: string,
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
