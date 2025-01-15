<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdSegmentUrlPrefix
 * @property string|null $ContentSegmentUrlPrefix
 */
class CdnConfiguration extends Shape
{
    /**
     * @param array{
     *     AdSegmentUrlPrefix?: string|null,
     *     ContentSegmentUrlPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
