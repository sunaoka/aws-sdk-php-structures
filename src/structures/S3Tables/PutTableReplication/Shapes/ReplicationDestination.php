<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationTableBucketARN
 */
class ReplicationDestination extends Shape
{
    /**
     * @param array{destinationTableBucketARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
