<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $targetArn
 * @property string $revisionId
 * @property string $deploymentId
 * @property string $deploymentName
 * @property 'ACTIVE'|'COMPLETED'|'CANCELED'|'FAILED'|'INACTIVE' $deploymentStatus
 * @property string $iotJobId
 * @property string $iotJobArn
 * @property array<string, Shapes\ComponentDeploymentSpecification> $components
 * @property Shapes\DeploymentPolicies $deploymentPolicies
 * @property Shapes\DeploymentIoTJobConfiguration $iotJobConfiguration
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property bool $isLatestForTarget
 * @property string $parentTargetArn
 * @property array<string, string> $tags
 */
class GetDeploymentResponse extends Response
{
}
