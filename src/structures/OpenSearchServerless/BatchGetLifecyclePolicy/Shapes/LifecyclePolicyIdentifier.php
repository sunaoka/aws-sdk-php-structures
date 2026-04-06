<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'retention' $type
 * @property string $name
 */
class LifecyclePolicyIdentifier extends Shape
{
    /**
     * @param array{
     *     type: 'retention',
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
