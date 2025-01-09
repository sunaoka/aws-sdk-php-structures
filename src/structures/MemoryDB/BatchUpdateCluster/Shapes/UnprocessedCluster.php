<?php

namespace Sunaoka\Aws\Structures\MemoryDB\BatchUpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterName
 * @property string $ErrorType
 * @property string $ErrorMessage
 */
class UnprocessedCluster extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string,
     *     ErrorType?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
