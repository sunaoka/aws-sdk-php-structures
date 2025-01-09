<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AacSettings $AacSettings
 * @property Ac3Settings $Ac3Settings
 * @property Eac3AtmosSettings $Eac3AtmosSettings
 * @property Eac3Settings $Eac3Settings
 * @property Mp2Settings $Mp2Settings
 * @property PassThroughSettings $PassThroughSettings
 * @property WavSettings $WavSettings
 */
class AudioCodecSettings extends Shape
{
    /**
     * @param array{
     *     AacSettings?: AacSettings,
     *     Ac3Settings?: Ac3Settings,
     *     Eac3AtmosSettings?: Eac3AtmosSettings,
     *     Eac3Settings?: Eac3Settings,
     *     Mp2Settings?: Mp2Settings,
     *     PassThroughSettings?: PassThroughSettings,
     *     WavSettings?: WavSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
