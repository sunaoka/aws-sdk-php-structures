<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceContainer
 * @property bool|null $readOnly
 */
class VolumeFrom extends Shape
{
    /**
     * @param array{
     *     sourceContainer?: string|null,
     *     readOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
