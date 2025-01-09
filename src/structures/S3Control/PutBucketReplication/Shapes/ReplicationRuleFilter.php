<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property S3Tag $Tag
 * @property ReplicationRuleAndOperator $And
 */
class ReplicationRuleFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tag?: S3Tag,
     *     And?: ReplicationRuleAndOperator
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
