<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $UserId
 * @property Shapes\UserSettings $UserSettings
 */
class UpdateUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UserId: string,
     *     UserSettings: Shapes\UserSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
