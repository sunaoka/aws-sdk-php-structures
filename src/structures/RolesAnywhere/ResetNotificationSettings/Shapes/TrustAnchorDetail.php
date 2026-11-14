<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ResetNotificationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $trustAnchorId
 * @property string|null $trustAnchorArn
 * @property string|null $name
 * @property Source|null $source
 * @property bool|null $enabled
 * @property bool|null $crlDpRevocationEnabled
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<NotificationSettingDetail>|null $notificationSettings
 * @property string|null $aliasName
 * @property string|null $aliasArn
 * @property string|null $previousAliasName
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
     *     crlDpRevocationEnabled?: bool|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     notificationSettings?: list<NotificationSettingDetail>|null,
     *     aliasName?: string|null,
     *     aliasArn?: string|null,
     *     previousAliasName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
