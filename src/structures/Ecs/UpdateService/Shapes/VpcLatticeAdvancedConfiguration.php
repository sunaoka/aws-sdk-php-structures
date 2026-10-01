<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $alternateTargetGroupArn
 * @property string|null $productionListenerRule
 * @property string|null $testListenerRule
 */
class VpcLatticeAdvancedConfiguration extends Shape
{
    /**
     * @param array{
     *     alternateTargetGroupArn?: string|null,
     *     productionListenerRule?: string|null,
     *     testListenerRule?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
