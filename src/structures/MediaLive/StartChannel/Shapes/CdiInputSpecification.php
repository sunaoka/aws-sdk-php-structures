<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SD'|'HD'|'FHD'|'UHD' $Resolution
 */
class CdiInputSpecification extends Shape
{
    /**
     * @param array{Resolution?: 'SD'|'HD'|'FHD'|'UHD'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
