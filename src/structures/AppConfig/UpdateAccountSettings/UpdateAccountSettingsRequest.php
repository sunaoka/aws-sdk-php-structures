<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DeletionProtectionSettings|null $DeletionProtection
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{DeletionProtection?: Shapes\DeletionProtectionSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
