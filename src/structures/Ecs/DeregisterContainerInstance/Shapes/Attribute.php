<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterContainerInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $value
 * @property 'container-instance'|null $targetType
 * @property string|null $targetId
 */
class Attribute extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value?: string|null,
     *     targetType?: 'container-instance'|null,
     *     targetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
