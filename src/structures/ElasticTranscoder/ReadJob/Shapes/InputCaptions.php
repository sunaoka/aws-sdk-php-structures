<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MergePolicy
 * @property list<CaptionSource> $CaptionSources
 */
class InputCaptions extends Shape
{
    /**
     * @param array{
     *     MergePolicy?: string,
     *     CaptionSources?: list<CaptionSource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
