<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SD'|'HD'|'FHD'|'UHD'|null $Resolution
 */
class CdiInputSpecification extends Shape
{
    /**
     * @param array{Resolution?: 'SD'|'HD'|'FHD'|'UHD'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
