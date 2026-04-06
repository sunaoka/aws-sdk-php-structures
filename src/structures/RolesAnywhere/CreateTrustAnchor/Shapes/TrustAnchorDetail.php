<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\CreateTrustAnchor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property bool|null $enabled
 * @property string|null $name
 * @property list<NotificationSettingDetail>|null $notificationSettings
 * @property Source|null $source
 * @property string|null $trustAnchorArn
 * @property string|null $trustAnchorId
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class TrustAnchorDetail extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     enabled?: bool|null,
     *     name?: string|null,
     *     notificationSettings?: list<NotificationSettingDetail>|null,
     *     source?: Source|null,
     *     trustAnchorArn?: string|null,
     *     trustAnchorId?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
