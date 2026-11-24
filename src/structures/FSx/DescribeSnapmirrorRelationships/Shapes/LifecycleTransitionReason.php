<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapmirrorRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property OntapError|null $OntapError
 */
class LifecycleTransitionReason extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     OntapError?: OntapError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
