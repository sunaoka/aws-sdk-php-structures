<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetExternalModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelEndpoint
 * @property 'SAGEMAKER' $modelSource
 * @property string $invokeModelEndpointRoleArn
 * @property ModelInputConfiguration $inputConfiguration
 * @property ModelOutputConfiguration $outputConfiguration
 * @property 'ASSOCIATED'|'DISSOCIATED' $modelEndpointStatus
 * @property string $lastUpdatedTime
 * @property string $createdTime
 * @property string $arn
 */
class ExternalModel extends Shape
{
    /**
     * @param array{
     *     modelEndpoint?: string,
     *     modelSource?: 'SAGEMAKER',
     *     invokeModelEndpointRoleArn?: string,
     *     inputConfiguration?: ModelInputConfiguration,
     *     outputConfiguration?: ModelOutputConfiguration,
     *     modelEndpointStatus?: 'ASSOCIATED'|'DISSOCIATED',
     *     lastUpdatedTime?: string,
     *     createdTime?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
