<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PercentEnabled
 * @property list<'VENDED_LOGS'|'LEGACY_CLOUDWATCH'> $EnabledLoggingStrategies
 * @property AdsInteractionLog|null $AdsInteractionLog
 * @property ManifestServiceInteractionLog|null $ManifestServiceInteractionLog
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     PercentEnabled: int,
     *     EnabledLoggingStrategies: list<'VENDED_LOGS'|'LEGACY_CLOUDWATCH'>,
     *     AdsInteractionLog?: AdsInteractionLog|null,
     *     ManifestServiceInteractionLog?: ManifestServiceInteractionLog|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
