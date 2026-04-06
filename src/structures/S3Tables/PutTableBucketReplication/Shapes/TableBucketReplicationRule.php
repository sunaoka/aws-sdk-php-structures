<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReplicationDestination> $destinations
 */
class TableBucketReplicationRule extends Shape
{
    /**
     * @param array{destinations: list<ReplicationDestination>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
