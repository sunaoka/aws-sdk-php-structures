<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetExternalModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $modelEndpoint
 * @property 'SAGEMAKER'|null $modelSource
 * @property string|null $invokeModelEndpointRoleArn
 * @property ModelInputConfiguration|null $inputConfiguration
 * @property ModelOutputConfiguration|null $outputConfiguration
 * @property 'ASSOCIATED'|'DISSOCIATED'|null $modelEndpointStatus
 * @property string|null $lastUpdatedTime
 * @property string|null $createdTime
 * @property string|null $arn
 */
class ExternalModel extends Shape
{
    /**
     * @param array{
     *     modelEndpoint?: string|null,
     *     modelSource?: 'SAGEMAKER'|null,
     *     invokeModelEndpointRoleArn?: string|null,
     *     inputConfiguration?: ModelInputConfiguration|null,
     *     outputConfiguration?: ModelOutputConfiguration|null,
     *     modelEndpointStatus?: 'ASSOCIATED'|'DISSOCIATED'|null,
     *     lastUpdatedTime?: string|null,
     *     createdTime?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
