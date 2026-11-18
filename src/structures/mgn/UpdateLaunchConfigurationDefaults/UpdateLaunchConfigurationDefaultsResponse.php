<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationDefaults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $sourceServerID
 * @property int<0, max>|null $smallVolumeMaxSize
 * @property Shapes\SourceServerVolumeConfiguration|null $smallVolumeConfiguration
 * @property Shapes\SourceServerVolumeConfiguration|null $largeVolumeConfiguration
 */
class UpdateLaunchConfigurationDefaultsResponse extends Response
{
}
