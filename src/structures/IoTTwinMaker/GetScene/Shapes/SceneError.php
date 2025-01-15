<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetScene\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MATTERPORT_ERROR'|null $code
 * @property string|null $message
 */
class SceneError extends Shape
{
    /**
     * @param array{
     *     code?: 'MATTERPORT_ERROR'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
