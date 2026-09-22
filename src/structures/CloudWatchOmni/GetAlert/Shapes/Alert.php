<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $alertId
 * @property string|null $description
 * @property string $accountId
 * @property string|null $spaceId
 * @property string|null $profileId
 * @property Rule $rule
 * @property 'ENABLED'|'DISABLED'|null $notificationStatus
 * @property AlertStateInfo|null $state
 * @property list<NotificationRule>|null $notificationRules
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $alertArn
 */
class Alert extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     alertId?: string|null,
     *     description?: string|null,
     *     accountId: string,
     *     spaceId?: string|null,
     *     profileId?: string|null,
     *     rule: Rule,
     *     notificationStatus?: 'ENABLED'|'DISABLED'|null,
     *     state?: AlertStateInfo|null,
     *     notificationRules?: list<NotificationRule>|null,
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
