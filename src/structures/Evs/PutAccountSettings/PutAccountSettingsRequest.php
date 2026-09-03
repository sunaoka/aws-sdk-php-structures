<?php

namespace Sunaoka\Aws\Structures\Evs\PutAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AccountSetting> $settings
 */
class PutAccountSettingsRequest extends Request
{
    /**
     * @param array{settings: list<Shapes\AccountSetting>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
