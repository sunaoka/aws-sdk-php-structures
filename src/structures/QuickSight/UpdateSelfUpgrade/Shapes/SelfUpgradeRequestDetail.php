<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSelfUpgrade\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UpgradeRequestId
 * @property string|null $UserName
 * @property 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO'|null $OriginalRole
 * @property 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO'|null $RequestedRole
 * @property string|null $RequestNote
 * @property int|null $CreationTime
 * @property 'PENDING'|'APPROVED'|'DENIED'|'UPDATE_FAILED'|'VERIFY_FAILED'|null $RequestStatus
 * @property int|null $lastUpdateAttemptTime
 * @property string|null $lastUpdateFailureReason
 */
class SelfUpgradeRequestDetail extends Shape
{
    /**
     * @param array{
     *     UpgradeRequestId?: string|null,
     *     UserName?: string|null,
     *     OriginalRole?: 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO'|null,
     *     RequestedRole?: 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO'|null,
     *     RequestNote?: string|null,
     *     CreationTime?: int|null,
     *     RequestStatus?: 'PENDING'|'APPROVED'|'DENIED'|'UPDATE_FAILED'|'VERIFY_FAILED'|null,
     *     lastUpdateAttemptTime?: int|null,
     *     lastUpdateFailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
