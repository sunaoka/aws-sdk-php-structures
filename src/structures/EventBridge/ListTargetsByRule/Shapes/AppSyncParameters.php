<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GraphQLOperation
 */
class AppSyncParameters extends Shape
{
    /**
     * @param array{GraphQLOperation?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
