<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Prefixes
 * @property list<Tag>|null $Tags
 */
class ReplicationRuleOrOperator extends Shape
{
    /**
     * @param array{
     *     Prefixes?: list<string>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
