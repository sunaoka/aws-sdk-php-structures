<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AacSettings|null $AacSettings
 * @property Ac3Settings|null $Ac3Settings
 * @property Eac3AtmosSettings|null $Eac3AtmosSettings
 * @property Eac3Settings|null $Eac3Settings
 * @property Mp2Settings|null $Mp2Settings
 * @property PassThroughSettings|null $PassThroughSettings
 * @property WavSettings|null $WavSettings
 */
class AudioCodecSettings extends Shape
{
    /**
     * @param array{
     *     AacSettings?: AacSettings|null,
     *     Ac3Settings?: Ac3Settings|null,
     *     Eac3AtmosSettings?: Eac3AtmosSettings|null,
     *     Eac3Settings?: Eac3Settings|null,
     *     Mp2Settings?: Mp2Settings|null,
     *     PassThroughSettings?: PassThroughSettings|null,
     *     WavSettings?: WavSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
