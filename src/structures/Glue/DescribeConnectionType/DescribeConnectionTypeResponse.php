<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConnectionType
 * @property string $Description
 * @property Shapes\Capabilities $Capabilities
 * @property array<string, Shapes\Property> $ConnectionProperties
 * @property array<string, Shapes\Property> $ConnectionOptions
 * @property Shapes\AuthConfiguration $AuthenticationConfiguration
 * @property array<string, Shapes\ComputeEnvironmentConfiguration> $ComputeEnvironmentConfigurations
 * @property array<string, Shapes\Property> $PhysicalConnectionRequirements
 * @property array<string, Shapes\Property> $AthenaConnectionProperties
 * @property array<string, Shapes\Property> $PythonConnectionProperties
 * @property array<string, Shapes\Property> $SparkConnectionProperties
 */
class DescribeConnectionTypeResponse extends Response
{
}
