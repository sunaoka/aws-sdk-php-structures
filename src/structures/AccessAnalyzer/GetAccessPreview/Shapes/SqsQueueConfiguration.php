<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $queuePolicy
 */
class SqsQueueConfiguration extends Shape
{
    /**
     * @param array{queuePolicy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
