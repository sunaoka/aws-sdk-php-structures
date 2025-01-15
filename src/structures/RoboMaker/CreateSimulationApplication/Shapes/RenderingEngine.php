<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OGRE'|null $name
 * @property string|null $version
 */
class RenderingEngine extends Shape
{
    /**
     * @param array{
     *     name?: 'OGRE'|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
