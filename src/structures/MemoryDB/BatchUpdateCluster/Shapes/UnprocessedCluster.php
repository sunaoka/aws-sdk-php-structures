<?php

namespace Sunaoka\Aws\Structures\MemoryDB\BatchUpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterName
 * @property string|null $ErrorType
 * @property string|null $ErrorMessage
 */
class UnprocessedCluster extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string|null,
     *     ErrorType?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
