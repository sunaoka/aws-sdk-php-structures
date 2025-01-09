<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateNotificationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITTypeId
 * @property Shapes\NotificationSpecification $Notification
 * @property bool $Active
 */
class UpdateNotificationSettingsRequest extends Request
{
    /**
     * @param array{
     *     HITTypeId: string,
     *     Notification?: Shapes\NotificationSpecification,
     *     Active?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
