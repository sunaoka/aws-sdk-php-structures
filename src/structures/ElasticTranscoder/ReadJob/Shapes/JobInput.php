<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $FrameRate
 * @property string|null $Resolution
 * @property string|null $AspectRatio
 * @property string|null $Interlaced
 * @property string|null $Container
 * @property Encryption|null $Encryption
 * @property TimeSpan|null $TimeSpan
 * @property InputCaptions|null $InputCaptions
 * @property DetectedProperties|null $DetectedProperties
 */
class JobInput extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     FrameRate?: string|null,
     *     Resolution?: string|null,
     *     AspectRatio?: string|null,
     *     Interlaced?: string|null,
     *     Container?: string|null,
     *     Encryption?: Encryption|null,
     *     TimeSpan?: TimeSpan|null,
     *     InputCaptions?: InputCaptions|null,
     *     DetectedProperties?: DetectedProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
