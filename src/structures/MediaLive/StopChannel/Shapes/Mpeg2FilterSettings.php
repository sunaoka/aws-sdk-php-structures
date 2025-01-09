<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TemporalFilterSettings $TemporalFilterSettings
 */
class Mpeg2FilterSettings extends Shape
{
    /**
     * @param array{TemporalFilterSettings?: TemporalFilterSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
