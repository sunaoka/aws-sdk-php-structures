<?php

namespace Sunaoka\Aws\Structures\Kms\ScheduleKeyDeletion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property int $PendingWindowInDays
 */
class ScheduleKeyDeletionRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     PendingWindowInDays?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
