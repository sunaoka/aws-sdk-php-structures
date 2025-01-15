<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ConnectionType
 * @property string|null $Description
 * @property Shapes\Capabilities|null $Capabilities
 * @property array<string, Shapes\Property>|null $ConnectionProperties
 * @property array<string, Shapes\Property>|null $ConnectionOptions
 * @property Shapes\AuthConfiguration|null $AuthenticationConfiguration
 * @property array<string, Shapes\ComputeEnvironmentConfiguration>|null $ComputeEnvironmentConfigurations
 * @property array<string, Shapes\Property>|null $PhysicalConnectionRequirements
 * @property array<string, Shapes\Property>|null $AthenaConnectionProperties
 * @property array<string, Shapes\Property>|null $PythonConnectionProperties
 * @property array<string, Shapes\Property>|null $SparkConnectionProperties
 */
class DescribeConnectionTypeResponse extends Response
{
}
