<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetTrustAnchor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property bool $enabled
 * @property string $name
 * @property list<NotificationSettingDetail> $notificationSettings
 * @property Source $source
 * @property string $trustAnchorArn
 * @property string $trustAnchorId
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class TrustAnchorDetail extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     enabled?: bool,
     *     name?: string,
     *     notificationSettings?: list<NotificationSettingDetail>,
     *     source?: Source,
     *     trustAnchorArn?: string,
     *     trustAnchorId?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
