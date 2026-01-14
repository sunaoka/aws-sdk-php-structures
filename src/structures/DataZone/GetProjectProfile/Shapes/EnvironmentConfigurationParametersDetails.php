<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ssmPath
 * @property list<EnvironmentConfigurationParameter>|null $parameterOverrides
 * @property list<EnvironmentConfigurationParameter>|null $resolvedParameters
 */
class EnvironmentConfigurationParametersDetails extends Shape
{
    /**
     * @param array{
     *     ssmPath?: string|null,
     *     parameterOverrides?: list<EnvironmentConfigurationParameter>|null,
     *     resolvedParameters?: list<EnvironmentConfigurationParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
