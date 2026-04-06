<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LinkApplicationLogSampling $sampling
 */
class LinkApplicationLogConfiguration extends Shape
{
    /**
     * @param array{sampling: LinkApplicationLogSampling} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
