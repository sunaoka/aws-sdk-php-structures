<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunctionEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $functionArn
 * @property string $endpointArn
 * @property string $endpointName
 * @property string|null $description
 * @property 'HomeRegion'|'MultiRegion'|'PerRegion' $endpointType
 * @property string $domainName
 * @property 'ApplicationManaged'|'IamAuth' $authType
 * @property 'LatestRevision'|'Disabled' $autoDeploymentMode
 * @property list<Shapes\RevisionWeight> $revisionWeights
 * @property list<string> $regions
 * @property Shapes\ScalingConfig|null $scalingConfig
 * @property Shapes\ThrottleConfig|null $throttleConfig
 * @property 'Pending'|'Active'|'Failed'|'Deleting' $state
 * @property string $stateReason
 * @property 'InProgress'|'Successful'|'Failed'|null $updateStatus
 * @property string|null $updateStatusReason
 * @property array<string, Shapes\RegionalEndpoint> $regionalEndpoints
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class CreateWebFunctionEndpointResponse extends Response
{
}
