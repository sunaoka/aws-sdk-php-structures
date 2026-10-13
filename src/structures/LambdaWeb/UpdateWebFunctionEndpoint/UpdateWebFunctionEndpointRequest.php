<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\UpdateWebFunctionEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $functionName
 * @property string $endpointName
 * @property string|null $description
 * @property 'ApplicationManaged'|'IamAuth'|null $authType
 * @property 'LatestRevision'|'Disabled'|null $autoDeploymentMode
 * @property list<Shapes\RevisionWeight>|null $revisionWeights
 * @property Shapes\ScalingConfig|null $scalingConfig
 * @property Shapes\ThrottleConfig|null $throttleConfig
 */
class UpdateWebFunctionEndpointRequest extends Request
{
    /**
     * @param array{
     *     functionName: string,
     *     endpointName: string,
     *     description?: string|null,
     *     authType?: 'ApplicationManaged'|'IamAuth'|null,
     *     autoDeploymentMode?: 'LatestRevision'|'Disabled'|null,
     *     revisionWeights?: list<Shapes\RevisionWeight>|null,
     *     scalingConfig?: Shapes\ScalingConfig|null,
     *     throttleConfig?: Shapes\ThrottleConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
