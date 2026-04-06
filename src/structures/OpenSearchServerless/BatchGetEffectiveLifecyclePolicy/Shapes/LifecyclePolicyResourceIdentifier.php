<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetEffectiveLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property 'retention' $type
 */
class LifecyclePolicyResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     type: 'retention'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
