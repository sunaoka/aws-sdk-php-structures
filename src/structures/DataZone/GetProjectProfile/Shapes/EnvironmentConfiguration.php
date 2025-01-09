<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsAccount $awsAccount
 * @property Region $awsRegion
 * @property EnvironmentConfigurationParametersDetails $configurationParameters
 * @property 'ON_CREATE'|'ON_DEMAND' $deploymentMode
 * @property int $deploymentOrder
 * @property string $description
 * @property string $environmentBlueprintId
 * @property string $id
 * @property string $name
 */
class EnvironmentConfiguration extends Shape
{
    /**
     * @param array{
     *     awsAccount: AwsAccount,
     *     awsRegion: Region,
     *     configurationParameters?: EnvironmentConfigurationParametersDetails,
     *     deploymentMode?: 'ON_CREATE'|'ON_DEMAND',
     *     deploymentOrder?: int,
     *     description?: string,
     *     environmentBlueprintId: string,
     *     id?: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
