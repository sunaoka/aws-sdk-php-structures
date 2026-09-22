<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $alertId
 * @property string|null $profileId
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\Rule|null $rule
 * @property bool|null $notificationsEnabled
 * @property list<Shapes\NotificationRule>|null $notificationRules
 */
class UpdateAlertRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     alertId: string,
     *     profileId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     rule?: Shapes\Rule|null,
     *     notificationsEnabled?: bool|null,
     *     notificationRules?: list<Shapes\NotificationRule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
