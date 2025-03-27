<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ConfigureLogsForPlaybackConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $PercentEnabled
 * @property string|null $PlaybackConfigurationName
 * @property list<'VENDED_LOGS'|'LEGACY_CLOUDWATCH'>|null $EnabledLoggingStrategies
 * @property Shapes\AdsInteractionLog|null $AdsInteractionLog
 * @property Shapes\ManifestServiceInteractionLog|null $ManifestServiceInteractionLog
 */
class ConfigureLogsForPlaybackConfigurationResponse extends Response
{
}
