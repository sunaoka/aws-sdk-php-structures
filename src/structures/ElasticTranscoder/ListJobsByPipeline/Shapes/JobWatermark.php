<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PresetWatermarkId
 * @property string|null $InputKey
 * @property Encryption|null $Encryption
 */
class JobWatermark extends Shape
{
    /**
     * @param array{
     *     PresetWatermarkId?: string|null,
     *     InputKey?: string|null,
     *     Encryption?: Encryption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
