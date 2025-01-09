<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterName
 * @property string $workgroupName
 */
class RedshiftStorageProperties extends Shape
{
    /**
     * @param array{
     *     clusterName?: string,
     *     workgroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
