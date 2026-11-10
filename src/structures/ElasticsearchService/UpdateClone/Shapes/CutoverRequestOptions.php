<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateClone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ClonedCluster'|'PrimaryCluster' $Target
 */
class CutoverRequestOptions extends Shape
{
    /**
     * @param array{Target: 'ClonedCluster'|'PrimaryCluster'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
