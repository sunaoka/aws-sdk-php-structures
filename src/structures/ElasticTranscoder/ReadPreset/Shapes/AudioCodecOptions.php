<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Profile
 * @property string|null $BitDepth
 * @property string|null $BitOrder
 * @property string|null $Signed
 */
class AudioCodecOptions extends Shape
{
    /**
     * @param array{
     *     Profile?: string|null,
     *     BitDepth?: string|null,
     *     BitOrder?: string|null,
     *     Signed?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
