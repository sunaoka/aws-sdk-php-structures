<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetEffectiveLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'retention' $type
 * @property string $resource
 */
class LifecyclePolicyResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     type: 'retention',
     *     resource: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
