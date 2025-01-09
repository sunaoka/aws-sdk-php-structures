<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketOwnershipControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OwnershipControlsRule> $Rules
 */
class OwnershipControls extends Shape
{
    /**
     * @param array{Rules: list<OwnershipControlsRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
