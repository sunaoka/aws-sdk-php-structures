<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReplicationInformation|null $replicationInformation
 */
class ManagedTableInformation extends Shape
{
    /**
     * @param array{replicationInformation?: ReplicationInformation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
