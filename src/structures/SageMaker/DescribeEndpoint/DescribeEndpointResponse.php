<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EndpointName
 * @property string $EndpointArn
 * @property string|null $EndpointConfigName
 * @property list<Shapes\ProductionVariantSummary>|null $ProductionVariants
 * @property Shapes\DataCaptureConfigSummary|null $DataCaptureConfig
 * @property 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed' $EndpointStatus
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\DeploymentConfig|null $LastDeploymentConfig
 * @property Shapes\AsyncInferenceConfig|null $AsyncInferenceConfig
 * @property Shapes\PendingDeploymentSummary|null $PendingDeploymentSummary
 * @property Shapes\ExplainerConfig|null $ExplainerConfig
 * @property list<Shapes\ProductionVariantSummary>|null $ShadowProductionVariants
 * @property Shapes\MetricsConfig|null $MetricsConfig
 */
class DescribeEndpointResponse extends Response
{
}
