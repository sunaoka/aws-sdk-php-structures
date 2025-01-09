<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Role
 * @property list<ReplicationRule> $Rules
 */
class ReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     Role: string,
     *     Rules: list<ReplicationRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
