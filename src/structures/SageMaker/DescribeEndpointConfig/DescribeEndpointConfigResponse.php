<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EndpointConfigName
 * @property string $EndpointConfigArn
 * @property list<Shapes\ProductionVariant> $ProductionVariants
 * @property Shapes\DataCaptureConfig $DataCaptureConfig
 * @property string $KmsKeyId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\AsyncInferenceConfig $AsyncInferenceConfig
 * @property Shapes\ExplainerConfig $ExplainerConfig
 * @property list<Shapes\ProductionVariant> $ShadowProductionVariants
 * @property string $ExecutionRoleArn
 * @property Shapes\VpcConfig $VpcConfig
 * @property bool $EnableNetworkIsolation
 */
class DescribeEndpointConfigResponse extends Response
{
}
