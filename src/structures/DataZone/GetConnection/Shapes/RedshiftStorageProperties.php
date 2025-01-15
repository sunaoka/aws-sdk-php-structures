<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clusterName
 * @property string|null $workgroupName
 */
class RedshiftStorageProperties extends Shape
{
    /**
     * @param array{
     *     clusterName?: string|null,
     *     workgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
