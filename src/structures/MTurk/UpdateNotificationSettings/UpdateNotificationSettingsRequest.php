<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateNotificationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITTypeId
 * @property Shapes\NotificationSpecification|null $Notification
 * @property bool|null $Active
 */
class UpdateNotificationSettingsRequest extends Request
{
    /**
     * @param array{
     *     HITTypeId: string,
     *     Notification?: Shapes\NotificationSpecification|null,
     *     Active?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
