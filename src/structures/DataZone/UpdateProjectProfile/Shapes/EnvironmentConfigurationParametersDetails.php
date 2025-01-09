<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EnvironmentConfigurationParameter> $parameterOverrides
 * @property list<EnvironmentConfigurationParameter> $resolvedParameters
 * @property string $ssmPath
 */
class EnvironmentConfigurationParametersDetails extends Shape
{
    /**
     * @param array{
     *     parameterOverrides?: list<EnvironmentConfigurationParameter>,
     *     resolvedParameters?: list<EnvironmentConfigurationParameter>,
     *     ssmPath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
