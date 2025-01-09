<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobDetailsError $jobDetails
 * @property JobAttachmentDetailsError $jobAttachmentDetails
 * @property StepDetailsError $stepDetails
 * @property EnvironmentDetailsError $environmentDetails
 */
class GetJobEntityError extends Shape
{
    /**
     * @param array{
     *     jobDetails?: JobDetailsError,
     *     jobAttachmentDetails?: JobAttachmentDetailsError,
     *     stepDetails?: StepDetailsError,
     *     environmentDetails?: EnvironmentDetailsError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
