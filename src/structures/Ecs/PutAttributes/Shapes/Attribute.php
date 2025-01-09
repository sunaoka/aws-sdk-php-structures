<?php

namespace Sunaoka\Aws\Structures\Ecs\PutAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $value
 * @property 'container-instance' $targetType
 * @property string $targetId
 */
class Attribute extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value?: string,
     *     targetType?: 'container-instance',
     *     targetId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
