<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReplicationRule> $rules
 */
class ReplicationConfiguration extends Shape
{
    /**
     * @param array{rules: list<ReplicationRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
