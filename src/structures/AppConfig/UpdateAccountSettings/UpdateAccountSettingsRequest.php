<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DeletionProtectionSettings $DeletionProtection
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{DeletionProtection?: Shapes\DeletionProtectionSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
