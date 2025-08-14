<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $environmentConfigurationName
 * @property string|null $environmentId
 * @property list<EnvironmentParameter>|null $environmentParameters
 * @property EnvironmentResolvedAccount|null $environmentResolvedAccount
 */
class EnvironmentConfigurationUserParameter extends Shape
{
    /**
     * @param array{
     *     environmentConfigurationName?: string|null,
     *     environmentId?: string|null,
     *     environmentParameters?: list<EnvironmentParameter>|null,
     *     environmentResolvedAccount?: EnvironmentResolvedAccount|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
