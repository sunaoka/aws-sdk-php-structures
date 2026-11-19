<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property Tag|null $Tag
 * @property ReplicationRuleOrOperator|null $Or
 */
class ReplicationRuleNotOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tag?: Tag|null,
     *     Or?: ReplicationRuleOrOperator|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
