<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetScene\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MATTERPORT_ERROR' $code
 * @property string $message
 */
class SceneError extends Shape
{
    /**
     * @param array{
     *     code?: 'MATTERPORT_ERROR',
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
