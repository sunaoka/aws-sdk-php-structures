<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property S3Tag|null $Tag
 * @property ReplicationRuleAndOperator|null $And
 */
class ReplicationRuleFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tag?: S3Tag|null,
     *     And?: ReplicationRuleAndOperator|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
