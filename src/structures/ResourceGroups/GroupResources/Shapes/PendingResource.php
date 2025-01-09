<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GroupResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 */
class PendingResource extends Shape
{
    /**
     * @param array{ResourceArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
