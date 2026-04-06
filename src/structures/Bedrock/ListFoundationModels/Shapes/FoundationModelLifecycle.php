<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'LEGACY' $status
 */
class FoundationModelLifecycle extends Shape
{
    /**
     * @param array{status: 'ACTIVE'|'LEGACY'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
