<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftClusterStorage $redshiftClusterSource
 * @property RedshiftServerlessStorage $redshiftServerlessSource
 */
class RedshiftStorage extends Shape
{
    /**
     * @param array{
     *     redshiftClusterSource?: RedshiftClusterStorage,
     *     redshiftServerlessSource?: RedshiftServerlessStorage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
