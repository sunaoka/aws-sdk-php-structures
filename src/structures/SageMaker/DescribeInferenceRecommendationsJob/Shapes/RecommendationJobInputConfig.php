<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelPackageVersionArn
 * @property string|null $ModelName
 * @property int<1, max>|null $JobDurationInSeconds
 * @property TrafficPattern|null $TrafficPattern
 * @property RecommendationJobResourceLimit|null $ResourceLimit
 * @property list<EndpointInputConfiguration>|null $EndpointConfigurations
 * @property string|null $VolumeKmsKeyId
 * @property RecommendationJobContainerConfig|null $ContainerConfig
 * @property list<EndpointInfo>|null $Endpoints
 * @property RecommendationJobVpcConfig|null $VpcConfig
 */
class RecommendationJobInputConfig extends Shape
{
    /**
     * @param array{
     *     ModelPackageVersionArn?: string|null,
     *     ModelName?: string|null,
     *     JobDurationInSeconds?: int<1, max>|null,
     *     TrafficPattern?: TrafficPattern|null,
     *     ResourceLimit?: RecommendationJobResourceLimit|null,
     *     EndpointConfigurations?: list<EndpointInputConfiguration>|null,
     *     VolumeKmsKeyId?: string|null,
     *     ContainerConfig?: RecommendationJobContainerConfig|null,
     *     Endpoints?: list<EndpointInfo>|null,
     *     VpcConfig?: RecommendationJobVpcConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
