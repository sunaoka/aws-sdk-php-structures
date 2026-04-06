<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueueLimitAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $limitId
 * @property 'ACTIVE'|'STOP_LIMIT_USAGE_AND_COMPLETE_TASKS'|'STOP_LIMIT_USAGE_AND_CANCEL_TASKS' $status
 */
class UpdateQueueLimitAssociationRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     limitId: string,
     *     status: 'ACTIVE'|'STOP_LIMIT_USAGE_AND_COMPLETE_TASKS'|'STOP_LIMIT_USAGE_AND_CANCEL_TASKS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
