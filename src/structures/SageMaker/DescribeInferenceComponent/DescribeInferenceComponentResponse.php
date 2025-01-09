<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InferenceComponentName
 * @property string $InferenceComponentArn
 * @property string $EndpointName
 * @property string $EndpointArn
 * @property string $VariantName
 * @property string $FailureReason
 * @property Shapes\InferenceComponentSpecificationSummary $Specification
 * @property Shapes\InferenceComponentRuntimeConfigSummary $RuntimeConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'InService'|'Creating'|'Updating'|'Failed'|'Deleting' $InferenceComponentStatus
 */
class DescribeInferenceComponentResponse extends Response
{
}
