<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgeDeploymentPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EdgeDeploymentPlanArn
 * @property string $EdgeDeploymentPlanName
 * @property list<Shapes\EdgeDeploymentModelConfig> $ModelConfigs
 * @property string $DeviceFleetName
 * @property int|null $EdgeDeploymentSuccess
 * @property int|null $EdgeDeploymentPending
 * @property int|null $EdgeDeploymentFailed
 * @property list<Shapes\DeploymentStageStatusSummary> $Stages
 * @property string|null $NextToken
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class DescribeEdgeDeploymentPlanResponse extends Response
{
}
