<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpointName
 * @property string|null $description
 * @property 'HomeRegion'|'MultiRegion'|'PerRegion' $endpointType
 * @property 'ApplicationManaged'|'IamAuth' $authType
 * @property 'LatestRevision'|'Disabled'|null $autoDeploymentMode
 * @property list<string>|null $regions
 * @property ScalingConfig|null $scalingConfig
 * @property ThrottleConfig|null $throttleConfig
 */
class EndpointConfig extends Shape
{
    /**
     * @param array{
     *     endpointName: string,
     *     description?: string|null,
     *     endpointType: 'HomeRegion'|'MultiRegion'|'PerRegion',
     *     authType: 'ApplicationManaged'|'IamAuth',
     *     autoDeploymentMode?: 'LatestRevision'|'Disabled'|null,
     *     regions?: list<string>|null,
     *     scalingConfig?: ScalingConfig|null,
     *     throttleConfig?: ThrottleConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
