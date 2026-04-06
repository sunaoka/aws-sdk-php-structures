<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourcesCount $ResourcesCount
 */
class ResourcesTrendsValues extends Shape
{
    /**
     * @param array{ResourcesCount: ResourcesCount} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
