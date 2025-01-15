<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isEditable
 * @property string|null $name
 * @property string|null $value
 */
class EnvironmentConfigurationParameter extends Shape
{
    /**
     * @param array{
     *     isEditable?: bool|null,
     *     name?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
