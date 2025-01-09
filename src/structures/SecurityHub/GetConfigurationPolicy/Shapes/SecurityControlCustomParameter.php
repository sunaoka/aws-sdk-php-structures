<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityControlId
 * @property array<string, ParameterConfiguration> $Parameters
 */
class SecurityControlCustomParameter extends Shape
{
    /**
     * @param array{
     *     SecurityControlId?: string,
     *     Parameters?: array<string, ParameterConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
