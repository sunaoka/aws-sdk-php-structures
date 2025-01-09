<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $InferenceComponentArn
 * @property string $InferenceComponentName
 * @property string $EndpointArn
 * @property string $EndpointName
 * @property string $VariantName
 * @property 'InService'|'Creating'|'Updating'|'Failed'|'Deleting' $InferenceComponentStatus
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class InferenceComponentSummary extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     InferenceComponentArn: string,
     *     InferenceComponentName: string,
     *     EndpointArn: string,
     *     EndpointName: string,
     *     VariantName: string,
     *     InferenceComponentStatus?: 'InService'|'Creating'|'Updating'|'Failed'|'Deleting',
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
