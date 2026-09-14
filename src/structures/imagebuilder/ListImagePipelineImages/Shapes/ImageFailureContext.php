<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelineImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'CREATING'|'BUILDING'|'TESTING'|'DISTRIBUTING'|'INTEGRATING'|'AVAILABLE'|'CANCELLED'|'FAILED'|'DEPRECATED'|'DELETED'|'DISABLED'|null $imageStatus
 * @property string|null $workflowExecutionId
 * @property string|null $workflowArn
 * @property string|null $stepExecutionId
 * @property string|null $failedStep
 * @property ComponentFailureContext|null $componentFailure
 * @property DistributionFailureContext|null $distributionFailure
 */
class ImageFailureContext extends Shape
{
    /**
     * @param array{
     *     imageStatus?: 'PENDING'|'CREATING'|'BUILDING'|'TESTING'|'DISTRIBUTING'|'INTEGRATING'|'AVAILABLE'|'CANCELLED'|'FAILED'|'DEPRECATED'|'DELETED'|'DISABLED'|null,
     *     workflowExecutionId?: string|null,
     *     workflowArn?: string|null,
     *     stepExecutionId?: string|null,
     *     failedStep?: string|null,
     *     componentFailure?: ComponentFailureContext|null,
     *     distributionFailure?: DistributionFailureContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
