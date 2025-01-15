<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property list<S3Tag>|null $Tags
 */
class ReplicationRuleAndOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tags?: list<S3Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
