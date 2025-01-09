<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PresetWatermarkId
 * @property string $InputKey
 * @property Encryption $Encryption
 */
class JobWatermark extends Shape
{
    /**
     * @param array{
     *     PresetWatermarkId?: string,
     *     InputKey?: string,
     *     Encryption?: Encryption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
