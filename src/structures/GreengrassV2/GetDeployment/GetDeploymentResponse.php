<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $targetArn
 * @property string|null $revisionId
 * @property string|null $deploymentId
 * @property string|null $deploymentName
 * @property 'ACTIVE'|'COMPLETED'|'CANCELED'|'FAILED'|'INACTIVE'|null $deploymentStatus
 * @property string|null $iotJobId
 * @property string|null $iotJobArn
 * @property array<string, Shapes\ComponentDeploymentSpecification>|null $components
 * @property Shapes\DeploymentPolicies|null $deploymentPolicies
 * @property Shapes\DeploymentIoTJobConfiguration|null $iotJobConfiguration
 * @property \Aws\Api\DateTimeResult|null $creationTimestamp
 * @property bool|null $isLatestForTarget
 * @property string|null $parentTargetArn
 * @property array<string, string>|null $tags
 */
class GetDeploymentResponse extends Response
{
}
