<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Rule> $Rules
 */
class LifecycleConfiguration extends Shape
{
    /**
     * @param array{Rules: list<Rule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
