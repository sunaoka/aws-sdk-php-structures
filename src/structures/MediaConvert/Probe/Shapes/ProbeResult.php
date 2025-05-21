<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Container|null $Container
 * @property Metadata|null $Metadata
 * @property list<TrackMapping>|null $TrackMappings
 */
class ProbeResult extends Shape
{
    /**
     * @param array{
     *     Container?: Container|null,
     *     Metadata?: Metadata|null,
     *     TrackMappings?: list<TrackMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
