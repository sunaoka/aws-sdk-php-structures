<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateGlobalSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $GlobalSettings
 */
class UpdateGlobalSettingsRequest extends Request
{
    /**
     * @param array{GlobalSettings?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
