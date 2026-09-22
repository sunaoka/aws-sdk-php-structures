<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListAlerts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $alertId
 * @property string|null $spaceId
 * @property string|null $profileId
 * @property 'ENABLED'|'DISABLED'|null $notificationStatus
 * @property AlertStateInfo $state
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $alertArn
 */
class AlertSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     alertId?: string|null,
     *     spaceId?: string|null,
     *     profileId?: string|null,
     *     notificationStatus?: 'ENABLED'|'DISABLED'|null,
     *     state: AlertStateInfo,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     alertArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
