<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property Tag $Tag
 * @property ReplicationRuleAndOperator $And
 */
class ReplicationRuleFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tag?: Tag,
     *     And?: ReplicationRuleAndOperator
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
