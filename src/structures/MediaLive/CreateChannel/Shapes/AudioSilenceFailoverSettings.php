<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AudioSelectorName
 * @property int $AudioSilenceThresholdMsec
 */
class AudioSilenceFailoverSettings extends Shape
{
    /**
     * @param array{
     *     AudioSelectorName: string,
     *     AudioSilenceThresholdMsec?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
