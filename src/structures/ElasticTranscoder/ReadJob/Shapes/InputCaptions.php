<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MergePolicy
 * @property list<CaptionSource>|null $CaptionSources
 */
class InputCaptions extends Shape
{
    /**
     * @param array{
     *     MergePolicy?: string|null,
     *     CaptionSources?: list<CaptionSource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
