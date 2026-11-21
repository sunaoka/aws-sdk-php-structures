<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRegionSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, bool>|null $ResourceTypeOptInPreference
 * @property array<string, bool>|null $ResourceTypeManagementPreference
 * @property array<string, bool>|null $ResourceTypeOptInIncremental
 */
class DescribeRegionSettingsResponse extends Response
{
}
