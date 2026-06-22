<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListInstrumentationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000>|null $MaxHits
 * @property int<1, 255>|null $MaxStringLength
 * @property int<1, 20>|null $MaxCollectionWidth
 * @property int<1, 5>|null $MaxCollectionDepth
 * @property int<1, 20>|null $MaxStackFrames
 * @property int<1, 1000>|null $MaxStackTraceSize
 * @property int<1, 5>|null $MaxObjectDepth
 * @property int<1, 20>|null $MaxFieldsPerObject
 */
class CaptureLimitsConfig extends Shape
{
    /**
     * @param array{
     *     MaxHits?: int<1, 1000>|null,
     *     MaxStringLength?: int<1, 255>|null,
     *     MaxCollectionWidth?: int<1, 20>|null,
     *     MaxCollectionDepth?: int<1, 5>|null,
     *     MaxStackFrames?: int<1, 20>|null,
     *     MaxStackTraceSize?: int<1, 1000>|null,
     *     MaxObjectDepth?: int<1, 5>|null,
     *     MaxFieldsPerObject?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
