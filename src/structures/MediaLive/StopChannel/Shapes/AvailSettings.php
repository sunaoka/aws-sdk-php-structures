<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Esam|null $Esam
 * @property Scte35SpliceInsert|null $Scte35SpliceInsert
 * @property Scte35TimeSignalApos|null $Scte35TimeSignalApos
 */
class AvailSettings extends Shape
{
    /**
     * @param array{
     *     Esam?: Esam|null,
     *     Scte35SpliceInsert?: Scte35SpliceInsert|null,
     *     Scte35TimeSignalApos?: Scte35TimeSignalApos|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
