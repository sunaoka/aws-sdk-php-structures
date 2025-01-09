<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelPackageVersionArn
 * @property string $ModelName
 * @property int $JobDurationInSeconds
 * @property TrafficPattern $TrafficPattern
 * @property RecommendationJobResourceLimit $ResourceLimit
 * @property list<EndpointInputConfiguration> $EndpointConfigurations
 * @property string $VolumeKmsKeyId
 * @property RecommendationJobContainerConfig $ContainerConfig
 * @property list<EndpointInfo> $Endpoints
 * @property RecommendationJobVpcConfig $VpcConfig
 */
class RecommendationJobInputConfig extends Shape
{
    /**
     * @param array{
     *     ModelPackageVersionArn?: string,
     *     ModelName?: string,
     *     JobDurationInSeconds?: int,
     *     TrafficPattern?: TrafficPattern,
     *     ResourceLimit?: RecommendationJobResourceLimit,
     *     EndpointConfigurations?: list<EndpointInputConfiguration>,
     *     VolumeKmsKeyId?: string,
     *     ContainerConfig?: RecommendationJobContainerConfig,
     *     Endpoints?: list<EndpointInfo>,
     *     VpcConfig?: RecommendationJobVpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
