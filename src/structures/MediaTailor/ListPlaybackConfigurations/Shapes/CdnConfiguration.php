<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdSegmentUrlPrefix
 * @property string $ContentSegmentUrlPrefix
 */
class CdnConfiguration extends Shape
{
    /**
     * @param array{
     *     AdSegmentUrlPrefix?: string,
     *     ContentSegmentUrlPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
