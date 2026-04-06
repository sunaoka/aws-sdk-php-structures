<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AudioSelectorName
 * @property int|null $AudioSilenceThresholdMsec
 */
class AudioSilenceFailoverSettings extends Shape
{
    /**
     * @param array{
     *     AudioSelectorName: string,
     *     AudioSilenceThresholdMsec?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
