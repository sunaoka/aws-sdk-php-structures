<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScriptModeConfig|null $scriptModeConfig
 * @property ContainerImage|null $containerImage
 */
class AlgorithmSpecification extends Shape
{
    /**
     * @param array{
     *     scriptModeConfig?: ScriptModeConfig|null,
     *     containerImage?: ContainerImage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
