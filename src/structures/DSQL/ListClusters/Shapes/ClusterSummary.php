<?php

namespace Sunaoka\Aws\Structures\DSQL\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $arn
 */
class ClusterSummary extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     arn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
