<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $environmentConfigurationName
 * @property string|null $environmentId
 * @property list<EnvironmentParameter>|null $environmentParameters
 */
class EnvironmentConfigurationUserParameter extends Shape
{
    /**
     * @param array{
     *     environmentConfigurationName?: string|null,
     *     environmentId?: string|null,
     *     environmentParameters?: list<EnvironmentParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
