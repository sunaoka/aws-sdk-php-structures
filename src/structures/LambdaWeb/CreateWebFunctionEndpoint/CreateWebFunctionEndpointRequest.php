<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunctionEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $functionName
 * @property string $endpointName
 * @property string|null $description
 * @property 'HomeRegion'|'MultiRegion'|'PerRegion' $endpointType
 * @property 'ApplicationManaged'|'IamAuth' $authType
 * @property 'LatestRevision'|'Disabled'|null $autoDeploymentMode
 * @property list<Shapes\RevisionWeight>|null $revisionWeights
 * @property list<string>|null $regions
 * @property Shapes\ScalingConfig|null $scalingConfig
 * @property Shapes\ThrottleConfig|null $throttleConfig
 */
class CreateWebFunctionEndpointRequest extends Request
{
    /**
     * @param array{
     *     functionName: string,
     *     endpointName: string,
     *     description?: string|null,
     *     endpointType: 'HomeRegion'|'MultiRegion'|'PerRegion',
     *     authType: 'ApplicationManaged'|'IamAuth',
     *     autoDeploymentMode?: 'LatestRevision'|'Disabled'|null,
     *     revisionWeights?: list<Shapes\RevisionWeight>|null,
     *     regions?: list<string>|null,
     *     scalingConfig?: Shapes\ScalingConfig|null,
     *     throttleConfig?: Shapes\ThrottleConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
