<?php

namespace Sunaoka\Aws\Structures\Kinesis\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShardId
 * @property list<string> $ParentShards
 * @property HashKeyRange $HashKeyRange
 */
class ChildShard extends Shape
{
    /**
     * @param array{
     *     ShardId: string,
     *     ParentShards: list<string>,
     *     HashKeyRange: HashKeyRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
