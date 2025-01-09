<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MergePolicy
 * @property list<CaptionSource> $CaptionSources
 * @property list<CaptionFormat> $CaptionFormats
 */
class Captions extends Shape
{
    /**
     * @param array{
     *     MergePolicy?: string,
     *     CaptionSources?: list<CaptionSource>,
     *     CaptionFormats?: list<CaptionFormat>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
