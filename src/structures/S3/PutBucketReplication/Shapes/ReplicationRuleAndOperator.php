<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property list<Tag> $Tags
 */
class ReplicationRuleAndOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
