<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationDefaults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property string|null $accountID
 * @property int<0, max>|null $smallVolumeMaxSize
 * @property Shapes\SourceServerVolumeConfiguration|null $smallVolumeConfiguration
 * @property Shapes\SourceServerVolumeConfiguration|null $largeVolumeConfiguration
 */
class UpdateLaunchConfigurationDefaultsRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     accountID?: string|null,
     *     smallVolumeMaxSize?: int<0, max>|null,
     *     smallVolumeConfiguration?: Shapes\SourceServerVolumeConfiguration|null,
     *     largeVolumeConfiguration?: Shapes\SourceServerVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
