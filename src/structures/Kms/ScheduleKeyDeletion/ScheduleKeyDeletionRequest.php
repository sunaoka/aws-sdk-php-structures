<?php

namespace Sunaoka\Aws\Structures\Kms\ScheduleKeyDeletion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property int<1, 365>|null $PendingWindowInDays
 */
class ScheduleKeyDeletionRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     PendingWindowInDays?: int<1, 365>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
