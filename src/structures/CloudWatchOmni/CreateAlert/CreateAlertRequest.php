<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $profileId
 * @property string $name
 * @property string|null $description
 * @property Shapes\Rule $rule
 * @property bool|null $notificationsEnabled
 * @property array<string, string>|null $tags
 * @property list<Shapes\NotificationRule>|null $notificationRules
 * @property string|null $clientToken
 */
class CreateAlertRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     profileId: string,
     *     name: string,
     *     description?: string|null,
     *     rule: Shapes\Rule,
     *     notificationsEnabled?: bool|null,
     *     tags?: array<string, string>|null,
     *     notificationRules?: list<Shapes\NotificationRule>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
