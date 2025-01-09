<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string $Task
 * @property string $Framework
 * @property string $FrameworkVersion
 * @property RecommendationJobPayloadConfig $PayloadConfig
 * @property string $NearestModelName
 * @property list<string> $SupportedInstanceTypes
 * @property 'RealTime'|'Serverless' $SupportedEndpointType
 * @property string $DataInputConfig
 * @property list<string> $SupportedResponseMIMETypes
 */
class RecommendationJobContainerConfig extends Shape
{
    /**
     * @param array{
     *     Domain?: string,
     *     Task?: string,
     *     Framework?: string,
     *     FrameworkVersion?: string,
     *     PayloadConfig?: RecommendationJobPayloadConfig,
     *     NearestModelName?: string,
     *     SupportedInstanceTypes?: list<string>,
     *     SupportedEndpointType?: 'RealTime'|'Serverless',
     *     DataInputConfig?: string,
     *     SupportedResponseMIMETypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
