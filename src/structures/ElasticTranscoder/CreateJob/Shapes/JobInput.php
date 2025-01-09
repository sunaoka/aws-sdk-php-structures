<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $FrameRate
 * @property string $Resolution
 * @property string $AspectRatio
 * @property string $Interlaced
 * @property string $Container
 * @property Encryption $Encryption
 * @property TimeSpan $TimeSpan
 * @property InputCaptions $InputCaptions
 * @property DetectedProperties $DetectedProperties
 */
class JobInput extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     FrameRate?: string,
     *     Resolution?: string,
     *     AspectRatio?: string,
     *     Interlaced?: string,
     *     Container?: string,
     *     Encryption?: Encryption,
     *     TimeSpan?: TimeSpan,
     *     InputCaptions?: InputCaptions,
     *     DetectedProperties?: DetectedProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
