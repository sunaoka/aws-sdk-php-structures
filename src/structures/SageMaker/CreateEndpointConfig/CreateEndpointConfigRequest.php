<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointConfigName
 * @property list<Shapes\ProductionVariant> $ProductionVariants
 * @property Shapes\DataCaptureConfig|null $DataCaptureConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property Shapes\AsyncInferenceConfig|null $AsyncInferenceConfig
 * @property Shapes\ExplainerConfig|null $ExplainerConfig
 * @property list<Shapes\ProductionVariant>|null $ShadowProductionVariants
 * @property string|null $ExecutionRoleArn
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property bool|null $EnableNetworkIsolation
 * @property Shapes\MetricsConfig|null $MetricsConfig
 */
class CreateEndpointConfigRequest extends Request
{
    /**
     * @param array{
     *     EndpointConfigName: string,
     *     ProductionVariants: list<Shapes\ProductionVariant>,
     *     DataCaptureConfig?: Shapes\DataCaptureConfig|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     AsyncInferenceConfig?: Shapes\AsyncInferenceConfig|null,
     *     ExplainerConfig?: Shapes\ExplainerConfig|null,
     *     ShadowProductionVariants?: list<Shapes\ProductionVariant>|null,
     *     ExecutionRoleArn?: string|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     EnableNetworkIsolation?: bool|null,
     *     MetricsConfig?: Shapes\MetricsConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
