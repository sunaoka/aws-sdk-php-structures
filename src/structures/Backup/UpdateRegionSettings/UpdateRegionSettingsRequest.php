<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRegionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, bool> $ResourceTypeOptInPreference
 * @property array<string, bool> $ResourceTypeManagementPreference
 */
class UpdateRegionSettingsRequest extends Request
{
    /**
     * @param array{
     *     ResourceTypeOptInPreference?: array<string, bool>,
     *     ResourceTypeManagementPreference?: array<string, bool>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
