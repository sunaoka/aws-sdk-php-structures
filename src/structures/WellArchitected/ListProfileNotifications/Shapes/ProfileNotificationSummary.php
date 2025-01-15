<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfileNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CurrentProfileVersion
 * @property string|null $LatestProfileVersion
 * @property 'PROFILE_ANSWERS_UPDATED'|'PROFILE_DELETED'|null $Type
 * @property string|null $ProfileArn
 * @property string|null $ProfileName
 * @property string|null $WorkloadId
 * @property string|null $WorkloadName
 */
class ProfileNotificationSummary extends Shape
{
    /**
     * @param array{
     *     CurrentProfileVersion?: string|null,
     *     LatestProfileVersion?: string|null,
     *     Type?: 'PROFILE_ANSWERS_UPDATED'|'PROFILE_DELETED'|null,
     *     ProfileArn?: string|null,
     *     ProfileName?: string|null,
     *     WorkloadId?: string|null,
     *     WorkloadName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
