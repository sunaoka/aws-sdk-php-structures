<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateClone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ClonedCluster'|'PrimaryCluster' $Target
 * @property 'InProgress'|'Completed'|'Failed' $Status
 */
class CutoverOptions extends Shape
{
    /**
     * @param array{
     *     Target: 'ClonedCluster'|'PrimaryCluster',
     *     Status: 'InProgress'|'Completed'|'Failed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
