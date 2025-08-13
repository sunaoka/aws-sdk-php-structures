<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accountPools
 * @property AwsAccount|null $awsAccount
 * @property Region|null $awsRegion
 * @property EnvironmentConfigurationParametersDetails|null $configurationParameters
 * @property 'ON_CREATE'|'ON_DEMAND'|null $deploymentMode
 * @property int<0, 16>|null $deploymentOrder
 * @property string|null $description
 * @property string $environmentBlueprintId
 * @property string|null $id
 * @property string $name
 */
class EnvironmentConfiguration extends Shape
{
    /**
     * @param array{
     *     accountPools?: list<string>|null,
     *     awsAccount?: AwsAccount|null,
     *     awsRegion?: Region|null,
     *     configurationParameters?: EnvironmentConfigurationParametersDetails|null,
     *     deploymentMode?: 'ON_CREATE'|'ON_DEMAND'|null,
     *     deploymentOrder?: int<0, 16>|null,
     *     description?: string|null,
     *     environmentBlueprintId: string,
     *     id?: string|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
