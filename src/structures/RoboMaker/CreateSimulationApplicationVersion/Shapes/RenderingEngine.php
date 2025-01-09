<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OGRE' $name
 * @property string $version
 */
class RenderingEngine extends Shape
{
    /**
     * @param array{
     *     name?: 'OGRE',
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
