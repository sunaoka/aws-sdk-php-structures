<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EnvironmentConfigurationParameter>|null $parameterOverrides
 * @property list<EnvironmentConfigurationParameter>|null $resolvedParameters
 * @property string|null $ssmPath
 */
class EnvironmentConfigurationParametersDetails extends Shape
{
    /**
     * @param array{
     *     parameterOverrides?: list<EnvironmentConfigurationParameter>|null,
     *     resolvedParameters?: list<EnvironmentConfigurationParameter>|null,
     *     ssmPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
