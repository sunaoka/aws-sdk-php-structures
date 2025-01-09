<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 */
class DeleteReplicaAction extends Shape
{
    /**
     * @param array{RegionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
