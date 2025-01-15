<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRegionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, bool>|null $ResourceTypeOptInPreference
 * @property array<string, bool>|null $ResourceTypeManagementPreference
 */
class UpdateRegionSettingsRequest extends Request
{
    /**
     * @param array{
     *     ResourceTypeOptInPreference?: array<string, bool>|null,
     *     ResourceTypeManagementPreference?: array<string, bool>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
