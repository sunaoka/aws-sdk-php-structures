<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property list<Tag>|null $Tags
 * @property ReplicationRuleNotOperator|null $Not
 */
class ReplicationRuleAndOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tags?: list<Tag>|null,
     *     Not?: ReplicationRuleNotOperator|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
