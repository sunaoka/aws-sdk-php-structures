<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property Shapes\AccountSettings $AccountSettings
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     AccountSettings: Shapes\AccountSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
