<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointConfigName
 * @property list<Shapes\ProductionVariant> $ProductionVariants
 * @property Shapes\DataCaptureConfig $DataCaptureConfig
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property Shapes\AsyncInferenceConfig $AsyncInferenceConfig
 * @property Shapes\ExplainerConfig $ExplainerConfig
 * @property list<Shapes\ProductionVariant> $ShadowProductionVariants
 * @property string $ExecutionRoleArn
 * @property Shapes\VpcConfig $VpcConfig
 * @property bool $EnableNetworkIsolation
 */
class CreateEndpointConfigRequest extends Request
{
    /**
     * @param array{
     *     EndpointConfigName: string,
     *     ProductionVariants: list<Shapes\ProductionVariant>,
     *     DataCaptureConfig?: Shapes\DataCaptureConfig,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     AsyncInferenceConfig?: Shapes\AsyncInferenceConfig,
     *     ExplainerConfig?: Shapes\ExplainerConfig,
     *     ShadowProductionVariants?: list<Shapes\ProductionVariant>,
     *     ExecutionRoleArn?: string,
     *     VpcConfig?: Shapes\VpcConfig,
     *     EnableNetworkIsolation?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
