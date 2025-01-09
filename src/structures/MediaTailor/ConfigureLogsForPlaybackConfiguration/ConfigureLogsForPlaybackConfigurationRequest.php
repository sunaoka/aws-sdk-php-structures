<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ConfigureLogsForPlaybackConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $PercentEnabled
 * @property string $PlaybackConfigurationName
 */
class ConfigureLogsForPlaybackConfigurationRequest extends Request
{
    /**
     * @param array{
     *     PercentEnabled: int,
     *     PlaybackConfigurationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
