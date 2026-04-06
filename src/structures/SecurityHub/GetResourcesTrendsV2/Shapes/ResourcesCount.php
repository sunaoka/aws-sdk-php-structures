<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $AllResources
 */
class ResourcesCount extends Shape
{
    /**
     * @param array{AllResources: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
