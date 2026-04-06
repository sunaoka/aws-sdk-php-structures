<?php

namespace Sunaoka\Aws\Structures\Deadline\DisassociateMemberFromJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $jobId
 * @property string $principalId
 * @property string $queueId
 */
class DisassociateMemberFromJobRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     jobId: string,
     *     principalId: string,
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
