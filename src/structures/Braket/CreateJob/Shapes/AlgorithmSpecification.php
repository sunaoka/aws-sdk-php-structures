<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerImage $containerImage
 * @property ScriptModeConfig $scriptModeConfig
 */
class AlgorithmSpecification extends Shape
{
    /**
     * @param array{
     *     containerImage?: ContainerImage,
     *     scriptModeConfig?: ScriptModeConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
