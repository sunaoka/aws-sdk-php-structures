<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Esam $Esam
 * @property Scte35SpliceInsert $Scte35SpliceInsert
 * @property Scte35TimeSignalApos $Scte35TimeSignalApos
 */
class AvailSettings extends Shape
{
    /**
     * @param array{
     *     Esam?: Esam,
     *     Scte35SpliceInsert?: Scte35SpliceInsert,
     *     Scte35TimeSignalApos?: Scte35TimeSignalApos
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
