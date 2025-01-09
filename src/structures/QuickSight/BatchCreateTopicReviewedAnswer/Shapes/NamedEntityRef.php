<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NamedEntityName
 */
class NamedEntityRef extends Shape
{
    /**
     * @param array{NamedEntityName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
