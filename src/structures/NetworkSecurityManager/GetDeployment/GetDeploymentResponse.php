<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetDeployment;

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
 * @property list<Shapes\DeploymentCoverageEntry>|null $deploymentCoverage
 * @property list<Shapes\DeploymentWarningEntry>|null $warnings
 */
class GetDeploymentResponse extends Response
{
}
