<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerImage|null $containerImage
 * @property ScriptModeConfig|null $scriptModeConfig
 */
class AlgorithmSpecification extends Shape
{
    /**
     * @param array{
     *     containerImage?: ContainerImage|null,
     *     scriptModeConfig?: ScriptModeConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
