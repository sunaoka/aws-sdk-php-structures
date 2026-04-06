<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InferenceComponentName
 * @property string $InferenceComponentArn
 * @property string $EndpointName
 * @property string $EndpointArn
 * @property string|null $VariantName
 * @property string|null $FailureReason
 * @property Shapes\InferenceComponentSpecificationSummary|null $Specification
 * @property Shapes\InferenceComponentRuntimeConfigSummary|null $RuntimeConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'InService'|'Creating'|'Updating'|'Failed'|'Deleting'|null $InferenceComponentStatus
 * @property Shapes\InferenceComponentDeploymentConfig|null $LastDeploymentConfig
 */
class DescribeInferenceComponentResponse extends Response
{
}
