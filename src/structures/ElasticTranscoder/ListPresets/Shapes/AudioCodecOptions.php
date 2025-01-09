<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Profile
 * @property string $BitDepth
 * @property string $BitOrder
 * @property string $Signed
 */
class AudioCodecOptions extends Shape
{
    /**
     * @param array{
     *     Profile?: string,
     *     BitDepth?: string,
     *     BitOrder?: string,
     *     Signed?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
