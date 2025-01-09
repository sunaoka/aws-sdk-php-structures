<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GraphQLOperation
 */
class AppSyncParameters extends Shape
{
    /**
     * @param array{GraphQLOperation?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
