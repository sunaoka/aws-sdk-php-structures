<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $id
 * @property string $environmentBlueprintId
 * @property string|null $description
 * @property 'ON_CREATE'|'ON_DEMAND'|null $deploymentMode
 * @property EnvironmentConfigurationParametersDetails|null $configurationParameters
 * @property AwsAccount|null $awsAccount
 * @property list<string>|null $accountPools
 * @property Region|null $awsRegion
 * @property int<0, 16>|null $deploymentOrder
 */
class EnvironmentConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     id?: string|null,
     *     environmentBlueprintId: string,
     *     description?: string|null,
     *     deploymentMode?: 'ON_CREATE'|'ON_DEMAND'|null,
     *     configurationParameters?: EnvironmentConfigurationParametersDetails|null,
     *     awsAccount?: AwsAccount|null,
     *     accountPools?: list<string>|null,
     *     awsRegion?: Region|null,
     *     deploymentOrder?: int<0, 16>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
