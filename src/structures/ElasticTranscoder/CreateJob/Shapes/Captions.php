<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MergePolicy
 * @property list<CaptionSource>|null $CaptionSources
 * @property list<CaptionFormat>|null $CaptionFormats
 */
class Captions extends Shape
{
    /**
     * @param array{
     *     MergePolicy?: string|null,
     *     CaptionSources?: list<CaptionSource>|null,
     *     CaptionFormats?: list<CaptionFormat>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
