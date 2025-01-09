<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $environmentConfigurationName
 * @property list<EnvironmentParameter> $environmentParameters
 */
class EnvironmentConfigurationUserParameter extends Shape
{
    /**
     * @param array{
     *     environmentConfigurationName?: string,
     *     environmentParameters?: list<EnvironmentParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
