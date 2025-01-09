<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 */
class DeleteReplicationGroupMemberAction extends Shape
{
    /**
     * @param array{RegionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
