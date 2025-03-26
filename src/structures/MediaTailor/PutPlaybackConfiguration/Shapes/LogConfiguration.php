<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PercentEnabled
 * @property list<'VENDED_LOGS'|'LEGACY_CLOUDWATCH'>|null $EnabledLoggingStrategies
 * @property AdsInteractionLog|null $AdsInteractionLog
 * @property ManifestServiceInteractionLog|null $ManifestServiceInteractionLog
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     PercentEnabled: int,
     *     EnabledLoggingStrategies?: list<'VENDED_LOGS'|'LEGACY_CLOUDWATCH'>|null,
     *     AdsInteractionLog?: AdsInteractionLog|null,
     *     ManifestServiceInteractionLog?: ManifestServiceInteractionLog|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
