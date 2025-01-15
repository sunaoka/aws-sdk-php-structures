<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property string|null $Task
 * @property string|null $Framework
 * @property string|null $FrameworkVersion
 * @property RecommendationJobPayloadConfig|null $PayloadConfig
 * @property string|null $NearestModelName
 * @property list<string>|null $SupportedInstanceTypes
 * @property 'RealTime'|'Serverless'|null $SupportedEndpointType
 * @property string|null $DataInputConfig
 * @property list<string>|null $SupportedResponseMIMETypes
 */
class RecommendationJobContainerConfig extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     Task?: string|null,
     *     Framework?: string|null,
     *     FrameworkVersion?: string|null,
     *     PayloadConfig?: RecommendationJobPayloadConfig|null,
     *     NearestModelName?: string|null,
     *     SupportedInstanceTypes?: list<string>|null,
     *     SupportedEndpointType?: 'RealTime'|'Serverless'|null,
     *     DataInputConfig?: string|null,
     *     SupportedResponseMIMETypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
