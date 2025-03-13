<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CompositionRecordingHlsConfiguration|null $hlsConfiguration
 * @property 'HLS'|null $format
 */
class RecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     hlsConfiguration?: CompositionRecordingHlsConfiguration|null,
     *     format?: 'HLS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
