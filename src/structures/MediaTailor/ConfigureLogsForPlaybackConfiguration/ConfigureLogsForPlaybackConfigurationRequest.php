<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ConfigureLogsForPlaybackConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $PercentEnabled
 * @property string $PlaybackConfigurationName
 * @property list<'VENDED_LOGS'|'LEGACY_CLOUDWATCH'>|null $EnabledLoggingStrategies
 * @property Shapes\AdsInteractionLog|null $AdsInteractionLog
 * @property Shapes\ManifestServiceInteractionLog|null $ManifestServiceInteractionLog
 */
class ConfigureLogsForPlaybackConfigurationRequest extends Request
{
    /**
     * @param array{
     *     PercentEnabled: int,
     *     PlaybackConfigurationName: string,
     *     EnabledLoggingStrategies?: list<'VENDED_LOGS'|'LEGACY_CLOUDWATCH'>|null,
     *     AdsInteractionLog?: Shapes\AdsInteractionLog|null,
     *     ManifestServiceInteractionLog?: Shapes\ManifestServiceInteractionLog|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
