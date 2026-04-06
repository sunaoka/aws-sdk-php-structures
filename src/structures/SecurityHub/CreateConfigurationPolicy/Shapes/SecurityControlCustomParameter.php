<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConfigurationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecurityControlId
 * @property array<string, ParameterConfiguration>|null $Parameters
 */
class SecurityControlCustomParameter extends Shape
{
    /**
     * @param array{
     *     SecurityControlId?: string|null,
     *     Parameters?: array<string, ParameterConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
