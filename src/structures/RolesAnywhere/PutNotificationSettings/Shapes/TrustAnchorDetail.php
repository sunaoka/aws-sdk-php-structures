<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\PutNotificationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $trustAnchorId
 * @property string|null $trustAnchorArn
 * @property string|null $name
 * @property Source|null $source
 * @property bool|null $enabled
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<NotificationSettingDetail>|null $notificationSettings
 */
class TrustAnchorDetail extends Shape
{
    /**
     * @param array{
     *     trustAnchorId?: string|null,
     *     trustAnchorArn?: string|null,
     *     name?: string|null,
     *     source?: Source|null,
     *     enabled?: bool|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     notificationSettings?: list<NotificationSettingDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
