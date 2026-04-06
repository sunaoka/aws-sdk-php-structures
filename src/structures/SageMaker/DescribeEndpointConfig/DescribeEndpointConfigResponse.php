<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EndpointConfigName
 * @property string $EndpointConfigArn
 * @property list<Shapes\ProductionVariant> $ProductionVariants
 * @property Shapes\DataCaptureConfig|null $DataCaptureConfig
 * @property string|null $KmsKeyId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\AsyncInferenceConfig|null $AsyncInferenceConfig
 * @property Shapes\ExplainerConfig|null $ExplainerConfig
 * @property list<Shapes\ProductionVariant>|null $ShadowProductionVariants
 * @property string|null $ExecutionRoleArn
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property bool|null $EnableNetworkIsolation
 */
class DescribeEndpointConfigResponse extends Response
{
}
