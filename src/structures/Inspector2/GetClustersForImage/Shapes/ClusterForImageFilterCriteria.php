<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetClustersForImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceId
 */
class ClusterForImageFilterCriteria extends Shape
{
    /**
     * @param array{resourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
