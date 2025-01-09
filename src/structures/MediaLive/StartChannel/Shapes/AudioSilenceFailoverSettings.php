<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AudioSelectorName
 * @property int<1000, max> $AudioSilenceThresholdMsec
 */
class AudioSilenceFailoverSettings extends Shape
{
    /**
     * @param array{
     *     AudioSelectorName: string,
     *     AudioSilenceThresholdMsec?: int<1000, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
