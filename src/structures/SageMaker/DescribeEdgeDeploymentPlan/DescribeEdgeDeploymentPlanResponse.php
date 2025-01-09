<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgeDeploymentPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EdgeDeploymentPlanArn
 * @property string $EdgeDeploymentPlanName
 * @property list<Shapes\EdgeDeploymentModelConfig> $ModelConfigs
 * @property string $DeviceFleetName
 * @property int $EdgeDeploymentSuccess
 * @property int $EdgeDeploymentPending
 * @property int $EdgeDeploymentFailed
 * @property list<Shapes\DeploymentStageStatusSummary> $Stages
 * @property string $NextToken
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class DescribeEdgeDeploymentPlanResponse extends Response
{
}
