<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftClusterStorage|null $redshiftClusterSource
 * @property RedshiftServerlessStorage|null $redshiftServerlessSource
 */
class RedshiftStorage extends Shape
{
    /**
     * @param array{
     *     redshiftClusterSource?: RedshiftClusterStorage|null,
     *     redshiftServerlessSource?: RedshiftServerlessStorage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
