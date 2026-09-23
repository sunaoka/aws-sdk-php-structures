<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateDeploymentSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $deploymentId
 * @property string $deploymentArn
 * @property string $deploymentName
 * @property string|null $deploymentDescription
 * @property 'DRAFT'|'ACTIVE'|'DISABLED' $status
 * @property Shapes\DeploymentConfiguration|null $deploymentConfiguration
 * @property list<Shapes\AssociatedPolicy> $associatedPolicyList
 * @property list<Shapes\AssociatedScope> $associatedScopeList
 * @property string $version
 * @property string|null $updateToken
 * @property bool|null $isSnapshot
 * @property bool|null $hasPublishedVersion
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CreateDeploymentSnapshotResponse extends Response
{
}
