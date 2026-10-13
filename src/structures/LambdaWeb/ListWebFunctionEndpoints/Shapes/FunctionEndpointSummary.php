<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\ListWebFunctionEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpointArn
 * @property string $endpointName
 * @property string|null $description
 * @property 'HomeRegion'|'MultiRegion'|'PerRegion' $endpointType
 * @property string $domainName
 * @property 'ApplicationManaged'|'IamAuth' $authType
 * @property 'LatestRevision'|'Disabled' $autoDeploymentMode
 * @property list<RevisionWeight> $revisionWeights
 * @property list<string> $regions
 * @property ScalingConfig|null $scalingConfig
 * @property ThrottleConfig|null $throttleConfig
 * @property 'Pending'|'Active'|'Failed'|'Deleting' $state
 * @property string $stateReason
 * @property 'InProgress'|'Successful'|'Failed'|null $updateStatus
 * @property string|null $updateStatusReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class FunctionEndpointSummary extends Shape
{
    /**
     * @param array{
     *     endpointArn: string,
     *     endpointName: string,
     *     description?: string|null,
     *     endpointType: 'HomeRegion'|'MultiRegion'|'PerRegion',
     *     domainName: string,
     *     authType: 'ApplicationManaged'|'IamAuth',
     *     autoDeploymentMode: 'LatestRevision'|'Disabled',
     *     revisionWeights: list<RevisionWeight>,
     *     regions: list<string>,
     *     scalingConfig?: ScalingConfig|null,
     *     throttleConfig?: ThrottleConfig|null,
     *     state: 'Pending'|'Active'|'Failed'|'Deleting',
     *     stateReason: string,
     *     updateStatus?: 'InProgress'|'Successful'|'Failed'|null,
     *     updateStatusReason?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
