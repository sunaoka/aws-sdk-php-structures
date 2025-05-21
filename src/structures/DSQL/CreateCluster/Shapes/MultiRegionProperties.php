<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $witnessRegion
 * @property list<string>|null $clusters
 */
class MultiRegionProperties extends Shape
{
    /**
     * @param array{
     *     witnessRegion?: string|null,
     *     clusters?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
