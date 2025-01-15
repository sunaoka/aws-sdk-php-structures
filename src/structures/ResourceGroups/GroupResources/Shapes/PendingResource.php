<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GroupResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 */
class PendingResource extends Shape
{
    /**
     * @param array{ResourceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
