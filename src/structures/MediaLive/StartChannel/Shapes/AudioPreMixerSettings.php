<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioNormalizationSettings|null $AudioNormalizationSettings
 * @property int|null $Channels
 * @property double|null $GainDb
 * @property RemixSettings|null $RemixSettings
 */
class AudioPreMixerSettings extends Shape
{
    /**
     * @param array{
     *     AudioNormalizationSettings?: AudioNormalizationSettings|null,
     *     Channels?: int|null,
     *     GainDb?: double|null,
     *     RemixSettings?: RemixSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
