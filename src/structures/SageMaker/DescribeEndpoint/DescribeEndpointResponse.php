<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EndpointName
 * @property string $EndpointArn
 * @property string $EndpointConfigName
 * @property list<Shapes\ProductionVariantSummary> $ProductionVariants
 * @property Shapes\DataCaptureConfigSummary $DataCaptureConfig
 * @property 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed' $EndpointStatus
 * @property string $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\DeploymentConfig $LastDeploymentConfig
 * @property Shapes\AsyncInferenceConfig $AsyncInferenceConfig
 * @property Shapes\PendingDeploymentSummary $PendingDeploymentSummary
 * @property Shapes\ExplainerConfig $ExplainerConfig
 * @property list<Shapes\ProductionVariantSummary> $ShadowProductionVariants
 */
class DescribeEndpointResponse extends Response
{
}
