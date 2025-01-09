<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfileNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CurrentProfileVersion
 * @property string $LatestProfileVersion
 * @property 'PROFILE_ANSWERS_UPDATED'|'PROFILE_DELETED' $Type
 * @property string $ProfileArn
 * @property string $ProfileName
 * @property string $WorkloadId
 * @property string $WorkloadName
 */
class ProfileNotificationSummary extends Shape
{
    /**
     * @param array{
     *     CurrentProfileVersion?: string,
     *     LatestProfileVersion?: string,
     *     Type?: 'PROFILE_ANSWERS_UPDATED'|'PROFILE_DELETED',
     *     ProfileArn?: string,
     *     ProfileName?: string,
     *     WorkloadId?: string,
     *     WorkloadName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
