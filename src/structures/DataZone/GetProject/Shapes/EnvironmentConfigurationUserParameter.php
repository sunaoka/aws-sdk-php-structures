<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $environmentId
 * @property EnvironmentResolvedAccount|null $environmentResolvedAccount
 * @property string|null $environmentConfigurationName
 * @property list<EnvironmentParameter>|null $environmentParameters
 */
class EnvironmentConfigurationUserParameter extends Shape
{
    /**
     * @param array{
     *     environmentId?: string|null,
     *     environmentResolvedAccount?: EnvironmentResolvedAccount|null,
     *     environmentConfigurationName?: string|null,
     *     environmentParameters?: list<EnvironmentParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
