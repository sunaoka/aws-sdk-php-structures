<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property list<S3Tag> $Tags
 */
class ReplicationRuleAndOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tags?: list<S3Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
