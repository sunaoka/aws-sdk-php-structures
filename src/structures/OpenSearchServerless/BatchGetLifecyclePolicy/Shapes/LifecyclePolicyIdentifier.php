<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'retention' $type
 */
class LifecyclePolicyIdentifier extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'retention'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
