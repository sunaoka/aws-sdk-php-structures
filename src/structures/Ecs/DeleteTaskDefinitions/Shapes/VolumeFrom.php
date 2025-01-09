<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceContainer
 * @property bool $readOnly
 */
class VolumeFrom extends Shape
{
    /**
     * @param array{
     *     sourceContainer?: string,
     *     readOnly?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
