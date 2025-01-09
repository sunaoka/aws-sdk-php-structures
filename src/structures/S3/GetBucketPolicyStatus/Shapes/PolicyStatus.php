<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketPolicyStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsPublic
 */
class PolicyStatus extends Shape
{
    /**
     * @param array{IsPublic?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
