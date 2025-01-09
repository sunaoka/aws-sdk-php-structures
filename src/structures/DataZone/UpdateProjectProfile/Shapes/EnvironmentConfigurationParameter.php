<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isEditable
 * @property string $name
 * @property string $value
 */
class EnvironmentConfigurationParameter extends Shape
{
    /**
     * @param array{
     *     isEditable?: bool,
     *     name?: string,
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
