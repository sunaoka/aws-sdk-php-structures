<?php

namespace Sunaoka\Aws\Structures\MPA\GetApprovalTeam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL_OTP' $Type
 * @property 'IN_SYNC'|'OUT_OF_SYNC' $SyncStatus
 */
class MfaMethod extends Shape
{
    /**
     * @param array{
     *     Type: 'EMAIL_OTP',
     *     SyncStatus: 'IN_SYNC'|'OUT_OF_SYNC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
