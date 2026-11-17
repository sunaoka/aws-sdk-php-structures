<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRouters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InferenceRouterName
 * @property string $InferenceRouterArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class InferenceRouterSummary extends Shape
{
    /**
     * @param array{
     *     InferenceRouterName: string,
     *     InferenceRouterArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
