<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $value
 * @property bool|null $isEditable
 */
class EnvironmentConfigurationParameter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     value?: string|null,
     *     isEditable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
